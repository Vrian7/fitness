<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alimento;

class FitlabelAndroidController extends Controller
{
    public function getAlimentos(){
        $alimentos = Alimento::get();
        $data = [
            'alimentos' => $alimentos
        ];
        return response()->json($alimentos);
    }

    public function getMacronutrientes(){
        $macronutrientes = \App\Macronutriente::get();

        return response()->json($macronutrientes);
    }

    public function getEstadosFisicos(){
        $estados_fisicos = \App\EstadoFisico::get();

        return response()->json($estados_fisicos);
    }

    public function getNivelesActividades() {
        $niveles = \App\Actividad::get();

        return response()->json($niveles);
    }

    public function getRecomendaciones() {
        $recomendaciones = \App\Recomendacion::get();

        return response()->json($recomendaciones);
    }

    public function getLogros() {
        $logros = \App\Logro::get();

        return response()->json($logros);
    }

    public function getAvances() {
        $avances = \App\Avance::get();

        return response()->json($avances);
    }

    public function getUsuarios(){
        $users = \App\User::get();

        return  response()->json($users);
    }
}
