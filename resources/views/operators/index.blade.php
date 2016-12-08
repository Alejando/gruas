@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Operadores</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('operators.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($operators->isEmpty())
        <div class="well text-center">No hay ningun registro.</div>
        @else
        <table class="table">
            <thead class="thead-color">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Número de Licencia</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($operators as $operator)
                <tr>
                    <td>{!! $operator->name !!}</td>
                    <td>{!! $operator->last_name !!}</td>
                    <td>{!! $operator->phone !!}</td>
                    <td>{!! $operator->number_license !!}</td>
                    <td>
                        @role('admin')
                        <a href="{!! route('operators.edit', [$operator->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('operators.delete', [$operator->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar a este Operador?')"><i class="glyphicon glyphicon-remove"></i></a>
                        @endrole
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection