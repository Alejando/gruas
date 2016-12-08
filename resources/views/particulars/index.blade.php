@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Servicio Particular</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('particulars.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($particulars->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table">
            <thead class="thead-color">
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Costo Z1</th>
                <th>Costo Z2</th>
                <th>Costo Z3</th>
                <th>Costo Z4</th>
                <th>Costo Z5</th>
                <th>Costo por kilometro</th>
                <th>Costo por Maniobras</th>
                <th>Costo de espera por Hra</th>
                <th>Costo por uso de Dolly</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($particulars as $particular)
                <tr>
                    <td>{!! $particular->alias !!}</td>
                    <td>{!! $particular->type !!}</td>
                    <td>{!! $particular->z1 !!}</td>
                    <td>{!! $particular->z2 !!}</td>
                    <td>{!! $particular->z3 !!}</td>
                    <td>{!! $particular->z4 !!}</td>
                    <td>{!! $particular->z5 !!}</td>
                    <td>{!! $particular->cost_kilometer !!}</td>
                    <td>{!! $particular->maneuvers !!}</td>
                    <td>{!! $particular->wait_hour !!}</td>
                    <td>{!! $particular->dolly_use !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('particulars.edit', [$particular->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('particulars.delete', [$particular->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este costo?')"><i class="glyphicon glyphicon-remove"></i></a>
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