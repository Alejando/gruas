@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Marca de vehiculos</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('brands.create') !!}">Agregar Nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($brands->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table">
            <thead>
                <th>Nombre de marca</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($brands as $brand)
                <tr>
                    <td>{!! $brand->name_brand !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('brands.edit', [$brand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('brands.delete', [$brand->id]) !!}" onclick="return confirm('¿Esta seguro de elimiar esta Marca?')"><i class="glyphicon glyphicon-remove"></i></a>
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