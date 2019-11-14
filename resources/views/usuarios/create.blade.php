@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Nuevo Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('usuarios') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Nombre
                            </label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">
                                Apellidos
                            </label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">
                                Fecha Nacimiento
                            </label>
                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="text" class="form-control" name="fecha_nacimiento" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                Nombre de usuario
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                Correo
                            </label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                Contraseña
                            </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection