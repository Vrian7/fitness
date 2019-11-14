@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de actividades
                    <a type="button" href="{{URL::route('avances.create')}}" class="float-right btn btn-success">Crear actividad</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Peso Inicial</th>
                        <th scope="col">Peso Actual</th>
                        <th scope="col">Estado B-M</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($avances as $avance)
                            <tr>
                                <th scope="row">{{ $avance->id }}</th>
                                <td>{{ $avance->nombre }}</td>
                                <td>{{ $avance->factor }}</td>
                                <td>{{ $avance->descripcion }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('avances/'.$avance->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('avances/'.$avance->id.'/edit')}}" class="btn btn-secondary">E</a>
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