@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de Recomendaciones
                    <a type="button" href="{{URL::route('recomendaciones.create')}}" class="float-right btn btn-success">Crear Recomendación</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Calorias</th>
                        <th scope="col">Catidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recomendaciones as $recomendacion)
                            <tr>
                                <th scope="row">{{ $recomendacion->id }}</th>
                                <td>{{ $recomendacion->alimento_id }}</td>
                                <td>{{ $recomendacion->calorias }}</td>
                                <td>{{ $recomendacion->cantidad }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('recomendaciones/'.$recomendacion->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('recomendaciones/'.$recomendacion->id.'/edit')}}" class="btn btn-secondary">E</a>
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