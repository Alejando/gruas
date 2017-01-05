@extends('layouts.app')

@section('content')

  
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="text-center">
         <img src="http://www.travislayne.com/images/loading.gif" class="icon" />
         <h1>Asistente para ayudar a crear un reporte</h1>
       </div>
       
     </div>
     <div class="modal-footer">
      <a href="{!! route('services.createService', ['1']) !!}">
        <button type="button" class="btn my-btn">Particular</button>
      </a>
      <a href="{!! route('services.createService', ['2']) !!}">
        <button type="button" class="btn my-btn">Asistencia</button>
      </a>
      <a href="{!! route('services.createService', ['3']) !!}">
        <button type="button" class="btn my-btn">Movilidad</button>
      </a>
      <a href="{!! route('services.createService', ['4']) !!}">
        <button type="button" class="btn my-btn">Policia</button>
      </a>
      <a href="{!! route('services.createService', ['5']) !!}">
        <button type="button" class="btn my-btn">Empresa</button>
      </a>
      <a href="{!! route('services.createService', ['6']) !!}">
        <button type="button" class="btn my-btn">Industrial</button>
      </a>  
    </div>
  </div>

</div>
</div>




<div class="container" style="width: 90%">
  <div class="row">
  <div class="col-md-2 pull-right">
    <a class="btn my-btn btn-md" style="margin-top: 10px" data-toggle="modal" data-target="#myModal">Nuevo Reporte</a>
  </div>
</div>
</div>
<div class="container"  style="width: 90%">

  @include('flash::message')

  <div class="row">
    <h1 class="pull-left">Reportes</h1>
    <div class="col-md-12">
      <div class="">

            <div class="panel-body">
              <form class="form-inline" style="border: none;">
                <div class="form-group">
                  <label for="cabineroInicio" class="form-label">Cabinero que Inicio </label>
                  <select type="text" class="form-control" id="cabineroInicio" >
                   
                  </select>
                </div>
                 <div class="form-group">
                  <label for="cabineroFin" class="form-label">Cabinero que Termino </label>
                   <select type="text" class="form-control" id="cabineroFin" >
                   
                  </select>
                </div>
                 <div class="form-group">
                  <label for="HoraInicio" class="form-label">Hora Inicio</label>
                  <input type="text" class="form-control date-picker" id="HoraInicio" value="{{date('Y/m/d/  H:i:s')}}">
                </div>
                 <div class="form-group">
                  <label for="HoraFin" class="form-label">Hora Fin</label>
                  <input type="text" class="form-control date-picker" id="HoraFin" value="{{date('Y/m/d/  H:i:s')}}">
                </div>
                <a class="btn btn-primary" onclick="filtraReporte();">Filtrar</a>
              </form>
            </div>

      </div>
    </div>
  </div>

<div class="row">
  @if($services->isEmpty())
  <div class="well text-center">No hay registros.</div>
  @else
  <table class="table" id="reportes">
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
        <td >{!! $service->time_promise !!}</td>
        <td>{!! $service->real_time !!}</td>
        <td>{!! $service->estatus !!}</td>
        <td>{!! $service->payment_received !!}</td>
       
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
        $('#reportes').DataTable();
      mostrarCabineros();
    } );
   $(document).ready(function() {
  $('.date-picker').daterangepicker({ singleDatePicker: true, timePicker: true,
      timePickerIncrement: 1,
      format: 'YYYY/MM/DD/ HH:mm:ss' }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
  });
  function mostrarCabineros() {
     $('#cabineroInicio').empty();
      $.ajax({
        type: "GET",
        url:'getCabineros',
        success: llegada,
      });
    function llegada(data){
      console.log(data);
      $('#cabineroInicio').append($('<option>', {
            value: '0',
            text:  'Sin filtrar'
             }));
        $.each(data, function(i,p) {
            $('#cabineroInicio').append($('<option>', {
            value: p.name,
            text: p.name
             }));
          //console.log(p.pivot.precio);
        });
        $('#cabineroFin').append($('<option>', {
            value: '0',
            text:  'Sin filtrar'
             }));
        $.each(data, function(i,p) {
            $('#cabineroFin').append($('<option>', {
            value: p.name,
            text: p.name
             }));
          //console.log(p.pivot.precio);
        });
      
    }
   }   
   function filtraReporte() {
     $.ajax({
        type: "get",
        data: {cInicio:$('#cabineroInicio').val(),cFin:$('#cabineroFin').val(),hInicio:$('#HoraInicio').val(),hFin:$('#HoraFin').val()},
        url:'getReportFilter',
        success: llegada,
      });   
     function llegada(data){
      console.log(data);
            
    }
   }

</script>
@endsection