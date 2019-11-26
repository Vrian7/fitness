<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alimento;
use App\Macronutriente;
class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::get();
        $data = [
            'alimentos' => $alimentos
        ];

        return view('alimentos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $macronutrientes = Macronutriente::get();
        $data = [
            'macronutrientes' => $macronutrientes
        ];

        return view('alimentos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alimento = new Alimento();
        $alimento->nombre = $request->nombre;
        $alimento->marca = $request->marca;
        $alimento->descripcion = $request->descripcion;
        $alimento->etiqueta = $request->etiqueta;
        $alimento->macronutriente_id = $request->macronutriente_id;
        $alimento->cantidad = $request->cantidad;
        $alimento->calorias = $request->calorias;
        $alimento->save();
        $data = [
            'alimento' => $alimento
        ];
        return redirect('alimentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alimento = Alimento::find($id);
        $data = [
            'alimento' => $alimento
        ];
        return view('alimentos.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alimento = Alimento::find($id);
        $macronutrientes = Macronutriente::get();
        $data = [
            'alimento' => $alimento,
            'macronutrientes' => $macronutrientes
        ];
        return view('alimentos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alimento = Alimento::find($id);
        $alimento->nombre = $request->nombre;
        $alimento->marca = $request->marca;
        $alimento->descripcion = $request->descripcion;
        $alimento->etiqueta = $request->etiqueta;
        $alimento->macronutriente_id = $request->macronutriente_id;
        $alimento->cantidad = $request->cantidad;
        $alimento->calorias = $request->calorias;
        $alimento->save();
        $data = [
            'alimento' => $alimento
        ];
        return redirect('alimentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
