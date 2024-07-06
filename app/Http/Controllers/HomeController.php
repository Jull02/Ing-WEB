<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Proyecto;
use App\Models\Tarea;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $today = date('Y-m-d');

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $query = Tarea::query();

        if ($startDate && $endDate) {
            $query->whereBetween('fecha_inicio', [$startDate, $endDate])
                  ->orWhereBetween('fecha_fin', [$startDate, $endDate]);
        }

        $tareas = $query->get()->map(function($tarea) use ($today) {
            $fechaFin = new \DateTime($tarea->fecha_fin);
            $hoy = new \DateTime($today);

            if ($tarea->estado == 'Terminada') {
                $tarea->dias_pasados = null;
            } elseif ($fechaFin < $hoy) {
                $tarea->estado = 'Vencida';
                $interval = $fechaFin->diff($hoy);
                $tarea->dias_pasados = $interval->days;
            } elseif ($tarea->fecha_inicio > $today) {
                $tarea->estado = 'Por hacer';
                $tarea->dias_pasados = null;
            } else {
                $tarea->estado = 'En proceso';
                $tarea->dias_pasados = null;
            }

            return $tarea;
        });

        return view('welcome', compact('tareas', 'startDate', 'endDate'));
    }
}
