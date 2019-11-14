@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Macronutriente</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('macronutrientes') }}">
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
                            <label for="peso" class="col-md-4 col-form-label text-md-right">
                                Peso
                            </label>
                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control" name="peso" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="calorias" class="col-md-4 col-form-label text-md-right">
                                Calorias
                            </label>
                            <div class="col-md-6">
                                <input id="calorias" type="text" class="form-control" name="calorias" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="proteinas" class="col-md-4 col-form-label text-md-right">
                                Proteinas
                            </label>
                            <div class="col-md-6">
                                <input id="proteinas" type="text" class="form-control" name="proteinas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carbohidratos" class="col-md-4 col-form-label text-md-right">
                                Carbohidratos
                            </label>
                            <div class="col-md-6">
                                <input id="carbohidratos" type="text" class="form-control" name="carbohidratos" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="grasas" class="col-md-4 col-form-label text-md-right">
                                Grasas
                            </label>
                            <div class="col-md-6">
                                <input id="grasas" type="text" class="form-control" name="grasas">
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