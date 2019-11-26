<?php

use Illuminate\Database\Seeder;

class MacronutrienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $macronutrientes = [
            [
                'nombre' => 'lacteos',
                'peso neto' => 10.00,
                'calorias' => 10.00,
                'proteinas' => 12.00,
                'carbohidratos' => 10.00,
                'grasas' => 10.00,
            ],
            [
                'nombre' => 'azucares',
                'peso neto' => 10.00,
                'calorias' => 30.00,
                'proteinas' => 9.00,
                'carbohidratos' => 18.00,
                'grasas' => 10.00,
            ],
            [
                'nombre' => 'harinas',
                'peso neto' => 10.00,
                'calorias' => 20.00,
                'proteinas' => 20.00,
                'carbohidratos' => 15.00,
                'grasas' => 8.00,
            ],
        ];
        foreach ($macronutrientes as $macronutriente) {
            App\Macronutriente::create($macronutriente);
        }
    }
}
