<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleados = [
            ['nombre' => 'Juan'],
            ['nombre' => 'Pedro'],
            ['nombre' => 'María'],
            ['nombre' => 'Ana'],
            ['nombre' => 'Luis'],
            ['nombre' => 'Carlos'],
            ['nombre' => 'Sofía'],
            ['nombre' => 'Marta'],
            ['nombre' => 'Jorge'],
            ['nombre' => 'Lucía'],
            ['nombre' => 'Pablo'],
            ['nombre' => 'Elena'],
            ['nombre' => 'Rosa'],
            ['nombre' => 'José'],
            ['nombre' => 'David'],
            ['nombre' => 'Laura'],
            ['nombre' => 'Miguel'],
            ['nombre' => 'Raúl'],
            ['nombre' => 'Isabel'],
            ['nombre' => 'Carmen'],
        ];

        foreach ($empleados as $empleado) {
            \App\Models\Empleado::create($empleado);
        }
    }
}
