@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de Usuarios
                    <a type="button" href="{{URL::route('usuarios.create')}}" class="float-right btn btn-success">Crear Usuario</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{ $usuario->id }}</th>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellidos }}</td>
                                <td>{{ $usuario->fecha_nacimiento }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('usuarios/'.$usuario->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('usuarios/'.$usuario->id.'/edit')}}" class="btn btn-secondary">E</a>
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