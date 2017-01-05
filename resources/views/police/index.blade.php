@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Servicios a Policia Federal</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('police.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($police->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Costo por Banderazo</th>
                <th>Costo por Kilometro</th>
                <th>Costo de Maniobra por Hora</th>
                <th>Costo de Custodia por Hora</th>
                <th>Costo de Abanderamiento por Hora</th>
                <th>Costo de Pensión</th>
                @role('admin')
                <th width="50px">Action</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($police as $police)
                <tr>
                    <td>{!! $police->type !!}</td>
                    <td>{!! $police->description !!}</td>
                    <td>{!! $police->banderazo !!}</td>
                    <td>{!! $police->cost_kilometer !!}</td>
                    <td>{!! $police->maneuvers !!}</td>
                    <td>{!! $police->custody_hour !!}</td>
                    <td>{!! $police->flag_hour !!}</td>
                    <td>{!! $police->pension !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('police.edit', [$police->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('police.delete', [$police->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este costo?')"><i class="glyphicon glyphicon-remove"></i></a>
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