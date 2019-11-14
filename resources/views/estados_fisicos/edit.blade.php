@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Actividad Nueva</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('actividades') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Nombre
                            </label>
                            <div class="col-md-6">
                                <input id="nombre" value="{{ $actividad->nombre }}" type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="factor" class="col-md-4 col-form-label text-md-right">
                                Factor
                            </label>
                            <div class="col-md-6">
                                <input id="factor" value="{{ $actividad->nombre }}" type="text" class="form-control" name="factor" required>
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