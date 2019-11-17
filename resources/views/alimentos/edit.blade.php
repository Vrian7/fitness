@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Alimento</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('alimentos/'.$alimento->id) }}">
                        <input name="_method" type="hidden" value="PUT">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Nombre
                            </label>
                            <div class="col-md-6">
                                <input id="nombre" value="{{ $alimento->nombre }}" type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">
                                Marca
                            </label>
                            <div class="col-md-6">
                                <input id="marca" value="{{ $alimento->marca }}" type="text" class="form-control" name="marca" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="macronutriente" class="col-md-4 col-form-label text-md-right">
                                Macronutriente
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="macronutriente_id" name="macronutriente_id">
                                    @foreach($macronutrientes as $macronutriente)
                                        @if($macronutriente->id == $alimento->macronutriente_id)
                                            <option value="{{ $macronutriente->id }}" selected>{{ $macronutriente->nombre }}</option>
                                        @else
                                            <option value="{{ $macronutriente->id }}">{{ $macronutriente->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                                Descripción
                            </label>
                            <div class="col-md-6">
                                <input id="descripcion" value="{{ $alimento->descripcion }}" type="text" class="form-control" name="descripcion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="etiqueta" class="col-md-4 col-form-label text-md-right">
                                Etiqueta
                            </label>
                            <div class="col-md-6">
                                <input id="etiqueta"  value="{{ $alimento->etiqueta }}" type="file" class="form-control" name="etiqueta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-right">
                                Cantidad
                            </label>
                            <div class="col-md-6">
                                <input id="cantidad" value="{{ $alimento->cantidad }}" type="text" class="form-control" name="cantidad">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="calorias" class="col-md-4 col-form-label text-md-right">
                                Calorias
                            </label>
                            <div class="col-md-6">
                                <input id="calorias" value="{{ $alimento->calorias }}" type="text" class="form-control" name="calorias">
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