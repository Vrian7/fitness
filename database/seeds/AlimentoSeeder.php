<?php

use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alimentos = [
            [
                'nombre' => 'leche',
                'marca' => 'pil',
                'macronutriente_id' => 1,
                'descripcion' => 'buena para el desarrollo del cuerpo humano',
                'codigo' => 'leche03001',
                'cantidad' => 100,
                'calorias' => 42
            ],
            [
                'nombre' => 'helado',
                'marca' => 'delizia',
                'macronutriente_id' => 1,
                'descripcion' => 'lacteo caracterizado por estar congelado',
                'codigo' => 'helado03002',
                'cantidad' => 100,
                'calorias' => 207
            ],
            [
                'nombre' => 'queso',
                'marca' => 'pil',
                'macronutriente_id' => 1,
                'descripcion' => 'alimento procesado de la leche',
                'codigo' => 'queso03003',
                'cantidad' => 100,
                'calorias' => 402,
            ],
            [
                'nombre' => 'yogurt',
                'marca' => 'pil',
                'macronutriente_id' => 1,
                'descripcion' => 'bebida',
                'codigo' => 'yogurt03004',
                'cantidad' => 100,
                'calorias' => 100
            ],
            [
                'nombre' => 'mantequilla',
                'marca' => 'regia',
                'macronutriente_id' => 1,
                'descripcion' => 'alimento lacteo',
                'codigo' => 'mantequilla03005',
                'cantidad' => 100,
                'calorias' => 717
            ],
            [
                'nombre' => 'chocolate',
                'marca' => 'el_ceibo',
                'macronutriente_id' => 2,
                'descripcion' => 'sustancia a base de cacao',
                'codigo' => 'chocolate02001',
                'cantidad' => 100,
                'calorias' => 546
            ],
            [
                'nombre' => 'cocacola',
                'marca' => 'cocacola',
                'macronutriente_id' => 2,
                'descripcion' => 'bebida gaseosa',
                'codigo' => 'cocacola02002',
                'cantidad' => 250,
                'calorias' => 110
            ],
            [
                'nombre' => 'oso_de_goma',
                'marca' => 'mogul',
                'macronutriente_id' => 2,
                'descripcion' => 'gominolas a base de gelatina',
                'codigo' => 'oso20003',
                'cantidad' => 30,
                'calorias' => 97
            ],
            [
                'nombre' => 'mermelada',
                'marca' => 'arcor',
                'macronutriente_id' => 2,
                'descripcion' => 'conserva de frutas cosidas en azucar',
                'codigo' => 'mermelada02004',
                'cantidad' => 100,
                'calorias' => 260
            ],
            [
                'nombre' => 'oreo',
                'marca' => 'nabisco',
                'macronutriente_id' => 2,
                'descripcion' => 'galletas de chocolate',
                'codigo' => 'oreo02005',
                'cantidad' => 11,
                'calorias' => 53
            ],
            [
                'nombre' => 'pan',
                'marca' => 'san gabriel',
                'macronutriente_id' => 3,
                'descripcion' => 'alimento basico elaborado a base de harina',
                'codigo' => 'pan01001',
                'cantidad' => 60,
                'calorias' => 168
            ],
            [
                'nombre' => 'cereal',
                'marca' => 'kelloggs',
                'macronutriente_id' => 3,
                'descripcion' => 'copos de maiz',
                'codigo' => 'cereal01002',
                'cantidad' => 100,
                'calorias' => 362
            ],
            [
                'nombre' => 'cupcake',
                'marca' => 'michelline',
                'macronutriente_id' => 3,
                'descripcion' => 'tarta para una persona',
                'codigo' => 'cupcake01003',
                'cantidad' => 50,
                'calorias' => 150
            ],
            [
                'nombre' => 'torta',
                'marca' => 'michelline',
                'macronutriente_id' => 3,
                'descripcion' => 'dusce de pasta de harina',
                'codigo' => 'torta01004',
                'cantidad' => 100,
                'calorias' => 389
            ],
            [
                'nombre' => 'pizza',
                'marca' => 'mr pizza',
                'macronutriente_id' => 3,
                'descripcion' => 'pan plano horneado',
                'codigo' => 'pizza01005',
                'cantidad' => 100,
                'calorias' => 267
            ],
            [
                'nombre' => 'pie',
                'marca' => 'michelline',
                'macronutriente_id' => 3,
                'descripcion' => 'fruta elaborada con una masa receubierta',
                'codigo' => 'pie01006',
                'cantidad' => 100,
                'calorias' => 237
            ],
        ];
        foreach ($alimentos as $alimento) {
            App\Alimento::create($alimento);
        }
    }
}
