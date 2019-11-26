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
                'macronutriente' => 'lacteos',
                'descripcion' => 'buena para el desarrollo del cuerpo humano',
                'etiqueta' => 'leche03001',
                'cantidad' => 100,
                'calorias' => 42
            ],
            [
                'nomnre' => 'helado',
                'marca' => 'delizia',
                'macronutriente' => 'lacteos',
                'descripcion' => 'lacteo caracterizado por estar congelado',
                'etiqueta' => 'helado03002',
                'cantidad' => 100,
                'calorias' => 207
            ],
            [
                'nombre' => 'queso',
                'marca' => 'pil',
                'macronutriente' => 'lacteos',
                'descripcion' => 'alimento procesado de la leche',
                'etiqueta' => 'queso03003',
                'cantidad' => 100,
                'calorias' => 402,
            ],
            [
                'nombre' => 'yogurt',
                'marca' => 'pil',
                'macronutriente' => 'lacteos',
                'descripcion' => 'bebida',
                'etiqueta' => 'yogurt03004',
                'cantidad' => 100,
                'calorias' => 100
            ],
            [
                'nombre' => 'mantequilla',
                'marca' => 'regia',
                'macronutriente' => 'lacteos',
                'descripcion' => 'alimento lacteo',
                'etiqueta' => 'mantequilla03005',
                'cantidad' => 100,
                'calorias' => 717
            ],
            [
                'nombre' => 'chocolate',
                'marca' => 'el_ceibo',
                'macronutriente' => 'azucares',
                'descripcion' => 'sustancia a base de cacao',
                'etiqueta' => 'chocolate02001',
                'cantidad' => 100,
                'calorias' => 546
            ],
            [
                'nombre' => 'cocacola',
                'marca' => 'cocacola',
                'macronutriente' => 'azucares',
                'descripcion' => 'bebida gaseosa',
                'etiqueta' => 'cocacola02002',
                'cantidad' => 250,
                'calorias' => 110
            ],
            [
                'nombre' => 'oso_de_goma',
                'marca' => 'mogul',
                'macronutriente' => 'azucares',
                'descripcion' => 'gominolas a base de gelatina',
                'etiqueta' => 'oso20003',
                'cantidad' => 30,
                'calorias' => 97
            ],
            [
                'nombre' => 'mermelada',
                'marca' => 'arcor',
                'macronutriente' => 'azucares',
                'descripcion' => 'conserva de frutas cosidas en azucar',
                'etiqueta' => 'mermelada02004',
                'cantidad' => 100,
                'calorias' => 260
            ],
            [
                'nombre' => 'oreo',
                'marca' => 'nabisco',
                'macronutriente' => 'azucares',
                'descripcion' => 'galletas de chocolate',
                'etiqueta' => 'oreo02005',
                'cantidad' => 11,
                'calorias' => 53
            ],
            [
                'nombre' => 'pan',
                'marca' => 'san gabriel',
                'macronutriente' => 'harinas',
                'descripcion' => 'alimento basico elaborado a base de harina',
                'etiqueta' => 'pan01001',
                'cantidad' => 60,
                'calorias' => 168
            ],
            [
                'nombre' => 'cereal',
                'marca' => 'kelloggs',
                'macronutriente' => 'harinas',
                'descripcion' => 'copos de maiz',
                'etiqueta' => 'cereal01002',
                'cantidad' => 100,
                'calorias' => 362
            ],
            [
                'nombre' => 'cupcake',
                'marca' => 'michelline',
                'macronutriente' => 'harinas',
                'descripcion' => 'tarta para una persona',
                'etiqueta' => 'cupcake01003',
                'cantidad' => 50,
                'calorias' => 150
            ],
            [
                'nombre' => 'torta',
                'marca' => 'michelline',
                'macronutriente' => 'harinas',
                'descripcion' => 'dusce de pasta de harina',
                'etiqueta' => 'torta01004',
                'cantidad' => 100,
                'calorias' => 389
            ],
            [
                'nombre' => 'pizza',
                'marca' => 'mr pizza',
                'macronutriente' => 'harinas',
                'descripcion' => 'pan plano horneado',
                'etiqueta' => 'pizza01005',
                'cantidad' => 100,
                'calorias' => 267
            ],
            [
                'nombre' => 'pie',
                'marca' => 'michelline',
                'macronutriente' => 'harinas',
                'descripcion' => 'fruta elaborada con una masa receubierta',
                'etiqueta' => 'pie01006',
                'cantidad' => 100,
                'calorias' => 237
            ],
        ];
        foreach ($alimentos as $alimento) {
            App\Alimento::create($alimento);
        }
    }
}
