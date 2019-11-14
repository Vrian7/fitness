@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">macronutriente</div>
                <div class="card-body">
                    <form method="POST" action="{{ asset('macronutrientes/'.$macronutriente->id.'/edit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Nombre
                            </label>
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                {{ $macronutriente->nombre }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">
                                peso
                            </label>
                            <label for="peso" class="col-md-4 col-form-label text-md-right">
                                {{ $macronutriente->peso }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="calorias" class="col-md-4 col-form-label text-md-right">
                                calorias
                            </label>
                            <label for="calorias" class="col-md-4 col-form-label text-md-right">
                                {{ $macronutriente->calorias }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="proteinas" class="col-md-4 col-form-label text-md-right">
                                proteinas
                            </label>
                            <label for="proteinas" class="col-md-4 col-form-label text-md-right">
                                {{ $macronutriente->proteinas }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="carbohidratos" class="col-md-4 col-form-label text-md-right">
                                Carbohidratos
                            </label>
                            <label for="carbohidratos" class="col-md-4 col-form-label text-md-right">
                            {{ $macronutriente->carbohidratos }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="grasas" class="col-md-4 col-form-label text-md-right">
                                grasas
                            </label>
                            <label for="grasas" class="col-md-4 col-form-label text-md-right">
                                {{ $macronutriente->grasas }}
                            </label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a type="button" href="{{asset('macronutrientes')}}" class="btn btn-secondary">Volver al listado</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection