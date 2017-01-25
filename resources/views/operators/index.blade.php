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
        <table id="tabla" class="table table-striped">
            <thead class="thead-color">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Número de Licencia</th>
                <th>Vencimiento de Licencia</th>
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
                    <td>{!! $operator->expires_license !!}</td>
                     @role('admin')
                        <td >
                            <a href="{!! route('operators.edit', [$operator->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{!! route('operators.delete', [$operator->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar a este Operador?')"><i class="glyphicon glyphicon-remove"></i></a>
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