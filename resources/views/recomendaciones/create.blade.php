@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Recomendación</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('recomendaciones') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="alimento" class="col-md-4 col-form-label text-md-right">
                                Alimento
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="alimento_id" name="alimento_id">
                                    @foreach($alimentos as $alimento)
                                        <option value="{{ $alimento->id }}">{{ $alimento->nombre }}</option>
                                    @endforeach
                                </select>
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
                            <label for="cantidad" class="col-md-4 col-form-label text-md-right">
                                Cantidad
                            </label>
                            <div class="col-md-6">
                                <input id="cantidad" type="text" class="form-control" name="cantidad">
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