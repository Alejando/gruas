@extends('layouts.app')
@section('widthContainer')
<div class="container"  style="width: 90%">
@endsection
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
<div class="container"  style="width: 90%">

  
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <h1 class="pull-left">Reportes</h1>
      </div>
       <div class="col-lg-6 col-sm-12">
        <a class="btn my-btn btn-md pull-right" style="margin-top: 10px" data-toggle="modal" data-target="#myModal">Nuevo Reporte</a>
      </div>
    </div>
</div>

<div class="container"  style="width: 90%; background-color:#E6E6E6;">

  @include('flash::message')

    <div class="row">
   
      
    <div class="col-md-12">
      <div >

            <div class="panel-body">
              <form class="form-inline" style="border: none;">
                <div class="form-group">
                  <label for="cabineroInicio" class="form-label">Cabinero que Inicio </label>
                  <select type="text" class="form-control" id="cabineroInicio">
                  <option value="0">Todos</option>
                   @foreach($users as $option)
                      <option>{{$option->name}}</option>
                   @endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label for="cabineroFin" class="form-label">Cabinero que Termino </label>
                   <select type="text" class="form-control" id="cabineroFin">
                   <option value="0">Todos</option>
                   @foreach($users as $option)
                      <option>{{$option->name}}</option>
                   @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="operador" class="form-label">Operador</label>
                   <select class="form-control" id="operador">
                   <option value="0">Todos</option>
                   @foreach($operators as $option)
                      <option>{{$option->name}}</option>
                   @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="unidad" class="form-label">Unidad</label>
                   <select class="form-control" id="unidad">
                   <option value="0">Todos</option>
                   @foreach($units as $option)
                      <option>{{$option->economic_number}}</option>
                   @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="servicio" class="form-label">Servicio</label>
                   <select class="form-control" id="servicio">
                    <option value="0">Todos</option>
                    <option>Particular</option>
                    <option>Asistencia</option>
                    <option>Movilidad</option>
                    <option>Policia</option>
                    <option>Empresa</option>
                    <option>Industrial</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="subMarca" class="form-label">Sub-Marca</label>
                   <select class="form-control" id="subMarca">
                   <option value="0">Todos</option>
                   @foreach($subbrands as $option)
                      <option>{{$option->name_sub_brand}}</option>
                   @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="empresa" class="form-label">Empresa</label>
                   <select class="form-control" id="empresa">
                    <option value="0">todos</option>
                      @foreach($empresas as $option)
                      <option>{{$option->name}}</option>
                   @endforeach
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
  <div class="table-responsive" style="padding: 10px">
    <table class="table table-striped" id="reportes">
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
        <th>Total</th>
        <th>Cabinero Inicio</th>
        <th>Cabinero Termino</th>
      </thead>
      <tbody id="tBody">

        @foreach($services as $service)
        <tr >
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
          <td>${!! $service->total !!}</td>
          <td>{!! $service->cabinero_took_service !!}</td>
          <td>{!! $service->cabinero_end_service !!}</td>
         
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <th>Folio</th>
        <th class="filtro">Tipo de Servicio</th>
        <th class="filtro">Unidad</th>
        <th class="filtro">Operador</th>
        <th class="filtro">Submarca</th>
        <th>Fecha y hora</th>
        <th>Ubicación Origen</th>
        <th>Arribo Estimado</th>
        <th>Arribo Real</th>
        <th>Estatus</th>
        <th>Pago</th>
        <th>Total</th>
        <th class="filtro">Cabinero Inicio</th>
        <th class="filtro">Cabinero Termino</th>
      </tfoot>
    </table>
  </div>
  @endif
</div>
</div>
@endsection
@section('footer')
      <div class="container" style="width: 90%">
@endsection
@section('js')
<script type="text/javascript">
   $(document).ready(function() {
     var table= $('#reportes').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            
        } ],
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


  //     $('#reportes tfoot .filtro').each( function () {
  //       var title = $(this).text();
  //       $(this).html( '<input type="text" placeholder="filtrar por '+title+'" />' );
  //   } );
  // table.columns().every( function () {
  //       var that = this;
 
  //       $( 'input', this.footer() ).on( 'keyup change', function () {
  //           if ( that.search() !== this.value ) {
  //               that
  //                   .search( this.value )
  //                   .draw();
  //           }
  //       } );
  //   } );
  
    } );
   $(document).ready(function() {
  $('.date-picker').daterangepicker({ singleDatePicker: true, timePicker: true,
      timePickerIncrement: 1,
      format: 'YYYY/MM/DD/ HH:mm:ss' }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
  });
  // function mostrarCabineros() {
  //    $('#cabineroInicio').empty();
  //     $.ajax({
  //       type: "GET",
  //       url:'getCabineros',
  //       success: llegada,
  //     });
  //   function llegada(data){
  //     console.log(data);
  //     $('#cabineroInicio').append($('<option>', {
  //           value: '0',
  //           text:  'Sin filtrar'
  //            }));
  //       $.each(data, function(i,p) {
  //           $('#cabineroInicio').append($('<option>', {
  //           value: p.name,
  //           text: p.name
  //            }));
  //         //console.log(p.pivot.precio);
  //       });
  //       $('#cabineroFin').append($('<option>', {
  //           value: '0',
  //           text:  'Sin filtrar'
  //            }));
  //       $.each(data, function(i,p) {
  //           $('#cabineroFin').append($('<option>', {
  //           value: p.name,
  //           text: p.name
  //            }));
  //         //console.log(p.pivot.precio);
  //       });
      
  //   }
  //  }   
   function filtraReporte() {
    var tabla='';

     $.ajax({
        type: "get",
        data: {cInicio:$('#cabineroInicio').val(),cFin:$('#cabineroFin').val(),hInicio:$('#HoraInicio').val(),hFin:$('#HoraFin').val(),servicio:$('#servicio').val(),operador:$('#operador').val(),unidad:$('#unidad').val(),subMarca:$('#subMarca').val(),empresa:$('#empresa').val()},
        url:'getReportFilter',
        success: llegada,
      });   
     function llegada(data){
      console.log(data);
       $('#reportes').dataTable().fnDestroy();
      $('#reportes').dataTable({
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
        dom: 'Bfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            
        } ],
           data:data,
        columns: [
            {data:'id'},
            {data:'service_type'},
            {data:'unit_assigned'},
            {data:'operator_assigned'},
            {data:'sub_brand' },
            {data:'time_request'},
            {data:'street_is'},
            {data:'time_promise'},
            {data:'real_time'},
            {data:'estatus'},
            {data:'payment_received' },
            {data:'total'},
             {data:'cabinero_took_service' },
            {data:'cabinero_end_service'}

        ]
        });

}

            
    
   }

</script>
@endsection