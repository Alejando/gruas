@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Unidades</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('units.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($units->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Marca</th>
                <th>Sub-marca</th>
                <th>Modelo</th>
                <th>Fecha de vencimiento del seguro</th>
                <th>Placas</th>
                <th>Número Económico</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($units as $unit)
                <tr>
                    <td>{!! $unit->type !!}</td>
                    <td>{!! $unit->description !!}</td>
                    <td>{!! $unit->brand !!}</td>
                    <td>{!! $unit->sub_brand !!}</td>
                    <td>{!! $unit->model !!}</td>
                    <td>{!! $unit->expiration_date !!}</td>
                    <td>{!! $unit->license_plate !!}</td>
                    <td>{!! $unit->economic_number !!}</td>
                    @role('admin')
                        <td>
                        <a href="{!! route('units.edit', [$unit->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('units.delete', [$unit->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar esta Unidad?')"><i class="glyphicon glyphicon-remove"></i></a>
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