<?php

use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividades = [
            [
                'nombre' => 'sedentario',
                'factor' => 1.20,
                'descripcion' => 'poco y ningun ejercicio',
            ],
            [
                'nombre' => 'poco activo',
                'factor' => 1.37,
                'descripcion' => 'ejercicio 1-3 veces por semana',
            ],
            [
                'nombre' => 'medianamente activo',
                'factor' => 1.54,
                'descripcion' => 'ejercicio 3-5 veces por semana',
            ],
            [
                'nombre' => 'muy activo',
                'factor' => 1.72,
                'descripcion' => 'ejercicio 6-7 veces por semana',
            ],
            [
                'nombre' => 'extra activo',
                'factor' => 1.90,
                'descripcion' => 'ejercicio muy intenso / trabajo fisico',
            ],
        ];
        foreach ($actividades as $actividad) {
            App\Actividad::create($actividad);
        }
    }
}
