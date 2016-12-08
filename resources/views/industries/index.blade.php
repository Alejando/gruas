@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Costo de Servicios Industriales</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('industries.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($industries->isEmpty())
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
                <th>Costo por Kilometro</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($industries as $industry)
                <tr>
                    <td>{!! $industry->type !!}</td>
                    <td>{!! $industry->description !!}</td>
                    <td>{!! $industry->z1 !!}</td>
                    <td>{!! $industry->z2 !!}</td>
                    <td>{!! $industry->z3 !!}</td>
                    <td>{!! $industry->z4 !!}</td>
                    <td>{!! $industry->z5 !!}</td>
                    <td>{!! $industry->cost_kilometer !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('industries.edit', [$industry->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('industries.delete', [$industry->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este costo?')"><i class="glyphicon glyphicon-remove"></i></a>
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