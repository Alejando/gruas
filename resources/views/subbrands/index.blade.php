@extends('layouts.app')

@section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Sub Marcas de vehiculos</h1>
        @role('admin')
        <a class="btn my-btn pull-right" style="margin-top: 25px" href="{!! route('subbrands.create') !!}">Agregar nuevo</a>
        @endrole
    </div>

    <div class="row">
        @if($subbrands->isEmpty())
        <div class="well text-center">No hay registros.</div>
        @else
        <table  id="marcas" class="table table-striped">
            <thead class="thead-color">
                <th>Nombre de Sub Marca</th>
                <th>Marca</th>
                <th>Tipo</th>
                @role('admin')
                <th width="50px">Acción</th>
                @endrole
            </thead>
            <tbody>
               
                @foreach($subbrands as $subbrand)
                <tr>
                    <td>{!! $subbrand->name_sub_brand !!}</td>
                    <td>{!! $subbrand->brand->name_brand !!}</td>
                    <td>{!! $subbrand->tipo !!}</td>
                    @role('admin')
                    <td>
                        <a href="{!! route('subbrands.edit', [$subbrand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('subbrands.delete', [$subbrand->id]) !!}" onclick="return confirm('Are you sure wants to delete this Subbrand?')"><i class="glyphicon glyphicon-remove"></i></a>
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
        tabla = $('#marcas').DataTable({
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