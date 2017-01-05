@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Modelo de vehiculos (Año)</h1>
        @role('admin')
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('vehiclemodels.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($vehiclemodels->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Modelo (Año)</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($vehiclemodels as $vehiclemodel)
                <tr>
                    <td>{!! $vehiclemodel->model_year !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('vehiclemodels.edit', [$vehiclemodel->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('vehiclemodels.delete', [$vehiclemodel->id]) !!}" onclick="return confirm('Are you sure wants to delete this Vehiclemodel?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                    @endrole
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection