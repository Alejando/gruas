@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Servicio de Movilidad</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('movilities.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($movilities->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Tipo</th>
                <th>Description</th>
                <th>Costo de Servicio Local</th>
                <th>Costo de Vuelta Sencilla</th>
                <th>Costo de uso de Dolly</th>
                <th>Costo de Espera por Hora</th>
                <th>Costo de Maniobra por Hora</th>
                <th>Tlajomulco a Guadalajara</th>
                <th>Costo por Kilometro</th>
                <th>Costo de Depósito fuera de Guadalajara</th>
                <th>Costo de Acondicionamiento por Hora</th>
                @role('admin')
                <th width="50px">Action</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($movilities as $movility)
                <tr>
                    <td>{!! $movility->type !!}</td>
                    <td>{!! $movility->description !!}</td>
                    <td>{!! $movility->local_service !!}</td>
                    <td>{!! $movility->single_return !!}</td>
                    <td>{!! $movility->dolly_use !!}</td>
                    <td>{!! $movility->wait_hour !!}</td>
                    <td>{!! $movility->maneuvers_hour !!}</td>
                    <td>{!! $movility->tlajomulco_to_GDL !!}</td>
                    <td>{!! $movility->cost_kilometer !!}</td>
                    <td>{!! $movility->deposit_outside_GDL !!}</td>
                    <td>{!! $movility->conditioning_hour !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('movilities.edit', [$movility->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('movilities.delete', [$movility->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este costo?')"><i class="glyphicon glyphicon-remove"></i></a>
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