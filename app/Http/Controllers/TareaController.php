<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::where('estado', 'In progress')->get();
        return view('tareas.index', compact('tareas'));
    }

    public function overdue()
    {
        $today = Carbon::today();
        $overdueTareas = Tarea::where('estado', 'In progress')
            ->where('fecha_fin', '<', $today)
            ->get()
            ->map(function($tarea) use ($today) {
                $tarea->dias_pasados = $today->diffInDays(Carbon::parse($tarea->fecha_fin));
                return $tarea;
            });

        return view('tareas.overdue', compact('overdueTareas'));
    }
}
