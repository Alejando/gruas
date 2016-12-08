@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Lista de usuarios</h1>
        <!--<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('listusers.create') !!}">Add New</a>-->
    </div>

    <div class="row">
        @if($listusers->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table class="table">
            <thead class="thead-color">
                <th>Nombre</th>
                <th>Email</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($listusers as $listusers)
                <tr>
                    <td>{!! $listusers->name !!}</td>
                    <td>{!! $listusers->email !!}</td>
                    @role('admin')
                    <td>
                        <!--<a href="{!! route('listusers.edit', [$listusers->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>-->
                        <a href="{!! route('listusers.delete', [$listusers->id]) !!}" onclick="return confirm('Are you sure wants to delete this Listusers?')"><i class="glyphicon glyphicon-remove"></i></a>
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