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
        <table id="tabla"class="table">
            <thead class="thead-color">
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($listusers as $listusers)
                <tr>
                    <td>{!! $listusers->name !!}</td>
                    <td>{!! $listusers->email !!}</td>
                    <td>
                      @foreach ($listusers->roles as $key => $value)
                              {{ $value->name }}
                     @endforeach 
                   </td>
                    @role('admin')
                      <td>
                          <!--<a href="{!! route('listusers.edit', [$listusers->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>-->
                          <a href="{!! route('listusers.delete', [$listusers->id]) !!}" onclick="return confirm('¿Estas seguro que deseas eliminar al usuario?')"><i class="glyphicon glyphicon-remove"></i></a>
                          <a href="{!! route('updateRole', [$listusers->id]) !!}" onclick="return confirm('¿Estas seguro que deseas cambiar el rol?')"><i class="glyphicon glyphicon-random"></i></a>
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

@section('js')
<script type="text/javascript">
  // var aTiempo=0;
  // var min10=0;
  // var min5=0;
  // var sinAsignar=0;
   $(document).ready(function() {
        tabla = $('#tabla').DataTable({
          "language": {
          "emptyTable":     "No hay datos disponibles",
          "search": "Buscar",
          "lengthMenu":     "Mostrar _MENU_ elementos",
          "info":           "Mostrar _START_ a _END_ de _TOTAL_ elementos",
          "infoEmpty":      "Mostrar 0 a 0 de 0 elementos",
          "paginate": {
              "first":      "Primero",
              "last":       "Ultimo",
              "next":       "Siguiente",
              "previous":   "Anterior"
          },
        },
        });
        
    } );
</script>
 @endsection