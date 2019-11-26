@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de Alimentos
                    <a type="button" href="{{URL::route('alimentos.create')}}" class="float-right btn btn-success">Crear alimento</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Calorias</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Macronutriente</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alimentos as $alimento)
                            <tr>
                                <th scope="row">{{ $alimento->codigo }}</th>
                                <td>{{ $alimento->nombre }}</td>
                                <td>{{ $alimento->marca }}</td>
                                <td>{{ $alimento->cantidad }}</td>
                                <td>{{ $alimento->calorias }}</td>
                                <td>{{ $alimento->descripcion }}</td>
                                <td>{{ $alimento->macronutriente_id }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('alimentos/'.$alimento->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('alimentos/'.$alimento->id.'/edit')}}" class="btn btn-secondary">E</a>
                                        <a type="button" href="#" class="btn btn-secondary">X</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection