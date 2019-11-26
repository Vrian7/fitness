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
                            <label for="codigo" class="col-md-4 col-form-label text-md-right">
                                Codigo
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->codigo }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Nombre
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->nombre }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">
                                Marca
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->marca }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="macronutriente" class="col-md-4 col-form-label text-md-right">
                                Macronutriente
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->macronutriente_id }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                                Descripción
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->descripcion }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="etiqueta" class="col-md-4 col-form-label text-md-right">
                                Etiqueta
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->etiqueta }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-right">
                                Cantidad
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->cantidad }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="calorias" class="col-md-4 col-form-label text-md-right">
                                Calorias
                            </label>
                            <div class="col-md-6">
                                {{ $alimento->calorias }}
                            </div>
                        </div>
                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection