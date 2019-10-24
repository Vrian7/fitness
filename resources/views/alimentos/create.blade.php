@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Nueva Alimento</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('alimentos') }}">
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
                            <label for="marca" class="col-md-4 col-form-label text-md-right">
                                Marca
                            </label>
                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="marca" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                                Descripción
                            </label>
                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="etiqueta" class="col-md-4 col-form-label text-md-right">
                                Etiqueta
                            </label>
                            <div class="col-md-6">
                                <input id="etiqueta" type="file" class="form-control" name="etiqueta">
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