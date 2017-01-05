@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Costo de Servicios a Empresas</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('businesses.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($businesses->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Costo Z1</th>
                <th>Costo Z2</th>
                <th>Costo Z3</th>
                <th>Costo Z4</th>
                <th>Costo Z5</th>
                <th>Costo por Kilometro</th>
                <th>Costo de Maniobra por Hora</th>
                <th>Costo de Espera por Hora</th>
                <th>Costo de uso de Dolly</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($businesses as $business)
                <tr>
                    <td>{!! $business->type !!}</td>
                    <td>{!! $business->description !!}</td>
                    <td>{!! $business->z1 !!}</td>
                    <td>{!! $business->z2 !!}</td>
                    <td>{!! $business->z3 !!}</td>
                    <td>{!! $business->z4 !!}</td>
                    <td>{!! $business->z5 !!}</td>
                    <td>{!! $business->cost_kilometer !!}</td>
                    <td>{!! $business->maneuvers !!}</td>
                    <td>{!! $business->wait_hour !!}</td>
                    <td>{!! $business->dolly_use !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('businesses.edit', [$business->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('businesses.delete', [$business->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este costo?')"><i class="glyphicon glyphicon-remove"></i></a>
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