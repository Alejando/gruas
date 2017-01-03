@extends('layouts.app')

@section('content')

  
<!-- Modal -->
<div id="modalCotizacion" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="text-center">
         <img src="http://www.travislayne.com/images/loading.gif" class="icon" />
         <h1>Asistente para cotizar servicios</h1>
       </div>
       
     </div>
     <div class="modal-footer">
      <a href="{!! route('services.createService', ['7']) !!}">
        <button type="button" class="btn my-btn">Particular</button>
      </a>
      <a href="{!! route('services.createService', ['8']) !!}">
        <button type="button" class="btn my-btn">Asistencia</button>
      </a>
      <a href="{!! route('services.createService', ['9']) !!}">
        <button type="button" class="btn my-btn">Movilidad</button>
      </a>
      <a href="{!! route('services.createService', ['10']) !!}">
        <button type="button" class="btn my-btn">Policia</button>
      </a>
      <a href="{!! route('services.createService', ['11']) !!}">
        <button type="button" class="btn my-btn">Empresa</button>
      </a>
      <a href="{!! route('services.createService', ['12']) !!}">
        <button type="button" class="btn my-btn">Industrial</button>
      </a>  
    </div>
  </div>

</div>
</div>




<div class="container" style="width: 80%">
  <div class="row">
  <div class="col-md-2 pull-right">
    <a class="btn my-btn btn-md" style="margin-top: 10px" data-toggle="modal" data-target="#modalContizacion">Nueva cotización</a>
  </div>
</div>
</div>
<div class="container" style="width: 80%">

  @include('flash::message')

  <div class="row">
    <h1 class="pull-left">Cotizaciones</h1>
    
  </div>

<div class="row">
  @if($services->isEmpty())
  <div class="well text-center">No hay registros.</div>
  @else
  <table class="table" id="activos">
    <thead>
      <th>Folio</th>
      <th>Tipo de Servicio</th>
      <th>Unidad</th>
      <th>Operador</th>
      <th>Submarca</th>
      <th>Fecha y hora</th>
      <th>Ubicación Origen</th>
      <th>Arribo Estimado</th>
      <th>Arribo Real</th>
      <th>Estatus</th>
      <th>Pago</th>
      <th>Acciones</th>
    </thead>
    <tbody>

      @foreach($services as $service)
      <tr>
        <td>{!! $service->id !!}</td>
        <td>{!! $service->service_type !!}</td>
        <td>{!! $service->unit_assigned !!}</td>
        <td>{!! $service->operator_assigned !!}</td>
        <td>{!! $service->sub_brand !!}</td>
        <td>{!! $service->time_request !!}</td>
        <td>{!! $service->street_is !!}, #{!! $service->number_is !!}, {!! $service->colony !!}, {!! $service->municipality !!}</td>
        <td class="arriboEstimado">{!! $service->time_promise !!}</td>
        <td>{!! $service->real_time !!}</td>
        <td>{!! $service->estatus !!}</td>
        <td>{!! $service->payment_received !!}</td>
        <td><a class="btn btn-primary" s href ="{!! route('services.edit', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas crear un reporte con esta contización?')">Crear Servicio <i class="glyphicon glyphicon-book" title="Crear reporte"></i></a></td>
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
   $(document).ready(function() {
        $('#activos').DataTable( );
        
    } );
  
</script>
@endsection