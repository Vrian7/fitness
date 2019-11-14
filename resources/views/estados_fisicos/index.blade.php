@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de Estados Fisicos
                    <a type="button" href="{{URL::route('estados_fisicos.create')}}" class="float-right btn btn-success">Crear estado fisico</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Estatura</th>
                        <th scope="col">IMC</th>
                        <th scope="col">Género</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Acciones</th>
                        <th scope="col">Peso Objetivo</th>
                        <th scope="col">Peos Estandar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estados_fisicos as $estado_fisico)
                            <tr>
                                <th scope="row">{{ $actividad->id }}</th>
                                <td>{{ $estado_fisico->peso }}</td>
                                <td>{{ $estado_fisico->estatura }}</td>
                                <td>{{ $estado_fisico->imc }}</td>
                                <td>{{ $estado_fisico->generon }}</td>
                                <td>{{ $estado_fisico->edad }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('estados_fisicos/'.$estado_fisico->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('estado_fisicoes/'.$estado_fisico->id.'/edit')}}" class="btn btn-secondary">E</a>
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