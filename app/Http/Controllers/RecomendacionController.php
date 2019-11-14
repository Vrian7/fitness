<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recomendacion;
use App\Alimento;

class RecomendacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recomendaciones = Recomendacion::get();
        $data = [
            'recomendaciones' => $recomendaciones
        ];

        return view('recomendaciones.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alimentos = Alimento::get();
        $data = [
            'alimentos' => $alimentos
        ];
        return view('recomendaciones.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recomendacion = new Recomendacion();
        $recomendacion->alimento_id = $request->alimento_id;
        $recomendacion->calorias = $request->calorias;
        $recomendacion->cantidad = $request->cantidad;
        $recomendacion->save();
        return redirect('recomendaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recomendacion = Recomendacion::find($id);
        $data = [
            'recomendacion' => $recomendacion
        ];
        return view('recomendaciones.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recomendacion = Recomendacion::find($id);
        $alimentos = Alimento::get();
        $data = [
            'recomendacion' => $recomendacion,
            'alimentos' => $alimentos
        ];
        return view('recomendaciones.edit', $data);
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
        $recomendacion = Recomendacion::find($id);
        $recomendacion->alimento_id = $request->alimento_id;
        $recomendacion->calorias = $request->calorias;
        $recomendacion->cantidad = $request->cantidad;
        $recomendacion->save();
        return redirect('recomendaciones');
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
