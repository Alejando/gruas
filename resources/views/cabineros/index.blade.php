@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Cabineros</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('cabineros.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($cabineros->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Horario</th>
                <th>Correo Electronico</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($cabineros as $cabinero)
                <tr>
                    <td>{!! $cabinero->name !!}</td>
                    <td>{!! $cabinero->last_name !!}</td>
                    <td>{!! $cabinero->phone !!}</td>
                    <td>{!! $cabinero->schedule !!}</td>
                    <td>{!! $cabinero->email !!}</td>
                   
                    @role('admin')
                        <td>
                        <a href="{!! route('cabineros.edit', [$cabinero->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('cabineros.delete', [$cabinero->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar a este Cabinero?')"><i class="glyphicon glyphicon-remove"></i></a>
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