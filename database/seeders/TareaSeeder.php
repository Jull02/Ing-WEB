<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
/*         crea con todos los campos de tareas_table  $table->id(); $table->string('nombre'); $table->unsignedBigInteger('empleado_id');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('estado');
            $table->unsignedBigInteger('proyecto_id');
            $table->timestamps();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('proyecto_id')->references('id')->on('proyectos'); */
        $tareas = [
            // Últimos meses de 2023
            ['nombre' => 'Tarea 1', 'empleado_id' => 1, 'descripcion' => 'Descripción de la tarea 1', 'fecha_inicio' => '2023-09-01', 'fecha_fin' => '2023-09-15', 'estado' => 'Terminada', 'proyecto_id' => 1],
            ['nombre' => 'Tarea 2', 'empleado_id' => 2, 'descripcion' => 'Descripción de la tarea 2', 'fecha_inicio' => '2023-09-16', 'fecha_fin' => '2023-09-30', 'estado' => 'Vencida', 'proyecto_id' => 2],
            ['nombre' => 'Tarea 3', 'empleado_id' => 3, 'descripcion' => 'Descripción de la tarea 3', 'fecha_inicio' => '2023-10-01', 'fecha_fin' => '2023-10-15', 'estado' => 'Vencida', 'proyecto_id' => 3],
            ['nombre' => 'Tarea 4', 'empleado_id' => 4, 'descripcion' => 'Descripción de la tarea 4', 'fecha_inicio' => '2023-10-16', 'fecha_fin' => '2023-10-30', 'estado' => 'Terminada', 'proyecto_id' => 4],
            ['nombre' => 'Tarea 5', 'empleado_id' => 5, 'descripcion' => 'Descripción de la tarea 5', 'fecha_inicio' => '2023-11-01', 'fecha_fin' => '2023-11-15', 'estado' => 'Vencida', 'proyecto_id' => 5],
            ['nombre' => 'Tarea 6', 'empleado_id' => 6, 'descripcion' => 'Descripción de la tarea 6', 'fecha_inicio' => '2023-11-16', 'fecha_fin' => '2023-11-30', 'estado' => 'Terminada', 'proyecto_id' => 6],
            ['nombre' => 'Tarea 7', 'empleado_id' => 7, 'descripcion' => 'Descripción de la tarea 7', 'fecha_inicio' => '2023-12-01', 'fecha_fin' => '2023-12-15', 'estado' => 'Terminada', 'proyecto_id' => 7],
            ['nombre' => 'Tarea 8', 'empleado_id' => 8, 'descripcion' => 'Descripción de la tarea 8', 'fecha_inicio' => '2023-12-16', 'fecha_fin' => '2023-12-30', 'estado' => 'Vencida', 'proyecto_id' => 8],
            ['nombre' => 'Tarea 9', 'empleado_id' => 9, 'descripcion' => 'Descripción de la tarea 9', 'fecha_inicio' => '2023-12-10', 'fecha_fin' => '2023-12-20', 'estado' => 'Vencida', 'proyecto_id' => 9],
            ['nombre' => 'Tarea 10', 'empleado_id' => 10, 'descripcion' => 'Descripción de la tarea 10', 'fecha_inicio' => '2023-12-21', 'fecha_fin' => '2023-12-31', 'estado' => 'Vencida', 'proyecto_id' => 10],

            // Tareas para 2024 hasta diciembre
            ['nombre' => 'Tarea 11', 'empleado_id' => 11, 'descripcion' => 'Descripción de la tarea 11', 'fecha_inicio' => '2024-01-01', 'fecha_fin' => '2024-01-15', 'estado' => 'Por hacer', 'proyecto_id' => 11],
            ['nombre' => 'Tarea 12', 'empleado_id' => 12, 'descripcion' => 'Descripción de la tarea 12', 'fecha_inicio' => '2024-02-01', 'fecha_fin' => '2024-02-15', 'estado' => 'Por hacer', 'proyecto_id' => 12],
            ['nombre' => 'Tarea 13', 'empleado_id' => 13, 'descripcion' => 'Descripción de la tarea 13', 'fecha_inicio' => '2024-03-01', 'fecha_fin' => '2024-03-15', 'estado' => 'Por hacer', 'proyecto_id' => 13],
            ['nombre' => 'Tarea 14', 'empleado_id' => 14, 'descripcion' => 'Descripción de la tarea 14', 'fecha_inicio' => '2024-04-01', 'fecha_fin' => '2024-04-15', 'estado' => 'Por hacer', 'proyecto_id' => 14],
            ['nombre' => 'Tarea 15', 'empleado_id' => 15, 'descripcion' => 'Descripción de la tarea 15', 'fecha_inicio' => '2024-05-01', 'fecha_fin' => '2024-05-15', 'estado' => 'Por hacer', 'proyecto_id' => 15],
            ['nombre' => 'Tarea 16', 'empleado_id' => 16, 'descripcion' => 'Descripción de la tarea 16', 'fecha_inicio' => '2024-06-01', 'fecha_fin' => '2024-06-15', 'estado' => 'Por hacer', 'proyecto_id' => 16],
            ['nombre' => 'Tarea 17', 'empleado_id' => 17, 'descripcion' => 'Descripción de la tarea 17', 'fecha_inicio' => '2024-07-01', 'fecha_fin' => '2024-07-15', 'estado' => 'Por hacer', 'proyecto_id' => 17],
            ['nombre' => 'Tarea 18', 'empleado_id' => 18, 'descripcion' => 'Descripción de la tarea 18', 'fecha_inicio' => '2024-08-01', 'fecha_fin' => '2024-08-15', 'estado' => 'Por hacer', 'proyecto_id' => 18],
            ['nombre' => 'Tarea 19', 'empleado_id' => 19, 'descripcion' => 'Descripción de la tarea 19', 'fecha_inicio' => '2024-09-01', 'fecha_fin' => '2024-09-15', 'estado' => 'Por hacer', 'proyecto_id' => 19],
            ['nombre' => 'Tarea 20', 'empleado_id' => 20, 'descripcion' => 'Descripción de la tarea 20', 'fecha_inicio' => '2024-10-01', 'fecha_fin'=> '2024-10-15', 'estado' => 'Por hacer', 'proyecto_id' => 20],
            ['nombre' => 'Tarea 21', 'empleado_id' => 13, 'descripcion' => 'Descripción de la tarea 21', 'fecha_inicio' => '2024-11-01', 'fecha_fin' => '2024-11-15', 'estado' => 'Por hacer', 'proyecto_id' => 15],
            ['nombre' => 'Tarea 22', 'empleado_id' => 5, 'descripcion' => 'Descripción de la tarea 22', 'fecha_inicio' => '2024-06-04', 'fecha_fin' => '2024-07-20', 'estado' => 'Por hacer', 'proyecto_id' => 20],
            ['nombre' => 'Tarea 23', 'empleado_id' => 7, 'descripcion' => 'Descripción de la tarea 23', 'fecha_inicio' => '2024-06-25', 'fecha_fin' => '2024-07-15', 'estado' => 'Por hacer', 'proyecto_id' => 7],
            ['nombre' => 'Tarea 24', 'empleado_id' => 8, 'descripcion' => 'Descripción de la tarea 24', 'fecha_inicio' => '2024-06-20', 'fecha_fin' => '2024-12-20', 'estado' => 'Por hacer', 'proyecto_id' => 8],
            ['nombre' => 'Tarea 25', 'empleado_id' => 10, 'descripcion' => 'Descripción de la tarea 25', 'fecha_inicio' => '2024-12-21', 'fecha_fin' => '2024-12-31', 'estado' => 'Por hacer', 'proyecto_id' => 10],
        ];


        foreach ($tareas as $tarea) {
            \App\Models\Tarea::create($tarea);
        }
    }
}
