@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Servicio de Asistencia</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('assistances.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($assistances->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Costo dentro de Periferico</th>
                <th>Costo por Kilometro</th>
                <th>Costo por Maniobra</th>
                <th>Costo de Espera por Hora</th>
                <th>Costo de uso de Dolly</th>
                <th>Costo de Abanderamiento</th>
                <th>Costo de Pension</th>
                @role('admin')
                <th width="50px">Action</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($assistances as $assistance)
                <tr>
                    <td>{!! $assistance->type !!}</td>
                    <td>{!! $assistance->description !!}</td>
                    <td>{!! $assistance->inside_of_periferico !!}</td>
                    <td>{!! $assistance->cost_kilometer !!}</td>
                    <td>{!! $assistance->maneuvers !!}</td>
                    <td>{!! $assistance->wait_hour !!}</td>
                    <td>{!! $assistance->dolly_use !!}</td>
                    <td>{!! $assistance->flag !!}</td>
                    <td>{!! $assistance->pension !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('assistances.edit', [$assistance->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('assistances.delete', [$assistance->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este costo?')"><i class="glyphicon glyphicon-remove"></i></a>
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