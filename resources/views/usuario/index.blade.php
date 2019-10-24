@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de Usuarios
                    <a type="button" href="{{URL::route('usuario.create')}}" class="float-right btn btn-success">Crear actividad</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">NÚmero de Usuario</th>
                        <th scope="col">Pasword</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($actividades as $actividad)
                            <tr>
                                <th scope="row">{{ $actividad->id }}</th>
                                <td>{{ $actividad->nombre }}</td>
                                <td>{{ $actividad->factor }}</td>
                                <td>{{ $actividad->descripcion }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('actividades/'.$actividad->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('actividades/'.$actividad->id.'/edit')}}" class="btn btn-secondary">E</a>
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