<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyectos = [
            ['nombre' => 'Proyecto 1'],
            ['nombre' => 'Proyecto 2'],
            ['nombre' => 'Proyecto 3'],
            ['nombre' => 'Proyecto 4'],
            ['nombre' => 'Proyecto 5'],
            ['nombre' => 'Proyecto 6'],
            ['nombre' => 'Proyecto 7'],
            ['nombre' => 'Proyecto 8'],
            ['nombre' => 'Proyecto 9'],
            ['nombre' => 'Proyecto 10'],
            ['nombre' => 'Proyecto 11'],
            ['nombre' => 'Proyecto 12'],
            ['nombre' => 'Proyecto 13'],
            ['nombre' => 'Proyecto 14'],
            ['nombre' => 'Proyecto 15'],
            ['nombre' => 'Proyecto 16'],
            ['nombre' => 'Proyecto 17'],
            ['nombre' => 'Proyecto 18'],
            ['nombre' => 'Proyecto 19'],
            ['nombre' => 'Proyecto 20'],
            
        ];

        foreach ($proyectos as $proyecto) {
            \App\Models\Proyecto::create($proyecto);
        }
    }
}
