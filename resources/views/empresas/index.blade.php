@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Empresas</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('empresas.create') !!}">Agregar Nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($empresas->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table table-striped">
            <thead class="thead-color">
                <th>Nombre de empresa</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($empresas as $empresa)
                <tr>
                    <td>{!! $empresa->name !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('empresas.edit', [$empresa->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('empresas.delete', [$empresa->id]) !!}" onclick="return confirm('¿Esta seguro de elimiar esta Empresa?')"><i class="glyphicon glyphicon-remove"></i></a>
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