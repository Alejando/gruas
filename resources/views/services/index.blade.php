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

@if(!empty(Session::get('option')) && Session::get('option') == 1)
<script>
  $(function() {
    $('#data').modal('show');
  });
</script>
@endif
<!-- Modal -->
<div id="data" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Datos del vehiculo</h4>
      </div>
      <div class="modal-body">
       @include('common.errors')

       {!! Form::open(['route' => 'services.store']) !!}
       @if(!empty(Session::get('option')) && Session::get('option') == 1)
       @include('services.fields')
       @endif
       {!! Form::close() !!}

     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" class="btn my-btn">Siguiente</button>
    </div>
  </div>

</div>
</div>
{{-- End Modal --}}


<div class="container" style="width: 80%">
  <div class="row">
    <div class="col-md-2">
      <p style="margin-top: 10px"><h3>Reportes Activos</h3></p>
    </div>
    <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge just-time">5</span> A tiempo
   </div>
   <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge ten-minutes">4</span>< A 10 mins
   </div>
   <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge fifteen-minutes">3</span> < A 5 mins
   </div>
   <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge">2</span> Sin asignar
   </div>
   <div class="col-md-2"></div>
   <div class="col-md-2">
    <a class="btn btn-default btn-md pull-right" style="margin-top: 10px" data-toggle="modal" data-target="#modalCotizacion">Nueva Cotización</a>
  </div>
  <div class="col-md-2">
    <a class="btn my-btn btn-md" style="margin-top: 10px" data-toggle="modal" data-target="#myModal">Nuevo Reporte</a>
  </div>
</div>
</div>
<div class="container" style="width: 80%">

  @include('flash::message')

  <div class="row">
    <h1 class="pull-left">Servicios</h1>
    
  </div>

<div class="table-responsive">
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
      <th width="50px">Acciones</th>
    </thead>
    <tbody>

      @foreach($services as $service)
      <tr>
        <td>{!! $service->id !!}</td>
        <td>{!! $service->service_type !!}</td>
        <td><b>{!! $service->unit_assigned !!}</b></td>
        <td><b>{!! $service->operator_assigned !!}</b></td>
        <td>{!! $service->sub_brand !!}</td>
        <td>{!! $service->time_request !!}</td>
        <td>{!! $service->street_is !!}, #{!! $service->number_is !!}, {!! $service->colony !!}, {!! $service->municipality !!}</td>
        <td class="arriboEstimado">{!! $service->time_promise !!}</td>
        <td>
          @if($service->real_time=="0000-00-00 00:00:00")
            <a class="btn btn-danger" href="{!! route('registrarArribo', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas registrar el arribo?')">Reg. Arribo <i class="glyphicon glyphicon-send" > </i></a>
          @else
            {!! $service->real_time !!}
          @endif
        </td>
        <td class="estatus">
          @if($service->estatus=="Arribado" && $service->payment_received=="Recibido")
            <a class="btn btn-success" href="{!! route('registrarTermino', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas terminar el servicio?')"> Reg. Término <i class="glyphicon glyphicon-ok" ></i></a>
          @else
          {!! $service->estatus !!}
          @endif
        </td>
        <td>
           @if($service->payment_received!= "Recibido")
            <a class="btn btn-warning" href="{!! route('registrarPago', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas Registrar el pago?')"> Reg. Pago <i class="glyphicon glyphicon-usd" ></i></a>
          @else
            {!! $service->payment_received !!}
          @endif
        </td>

        <td ><div class="btn-group">
          <a  class="btn btn-primary" href="{!! route('services.edit', [$service->id]) !!}">Editar <i class="glyphicon glyphicon-edit" title="Editar"></i></a>
          <a  class="btn btn-danger" href="{!! route('cancelarServicio', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas cancerlar el servicio?')">Cancelar <i class="glyphicon glyphicon-trash" title="Editar"></i></a>
        </div>
         
        </td>
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

        verificarEstado();
        setInterval(verificarEstado, 3000)
    } );
   function verificarEstado(){
     var fecha =  new Date();
       //nsole.log('<---->'+fecha);
       $("#activos tbody tr .estatus").each(function (index) 
        {
            var estatus=$(this).text(); 
            var tr= $(this).parent();
            // console.log(tr.find('.arriboEstimado').html());
             // console.log(estatus.search("Asignado"))
            if(estatus.includes("Asignado")){
            // console.log(estatus)
              var tr=tr.find('.arriboEstimado').html()
              var fechaServicio= new Date(tr);
              var fecha10  = new Date(fechaServicio.setMinutes(fechaServicio.getMinutes()-10,0,0));
              var fecha5  = new Date(fechaServicio.setMinutes(fechaServicio.getMinutes()+5,0,0));

               console.log(fecha10+'<---->'+fecha5);
                if(fecha<fecha10){
                  $(this).parent().css("background-color", "#B5E7C8");
                }
                else if(fecha>fecha10 && fecha<fecha5){
                   $(this).parent().css("background-color", "#FFDAA9");
                  //console.log('fecha 2->'+fecha);
                }
                else if(fecha>fecha5){
                   $(this).parent().css("background-color", "#FF0020");
                  //console.log('fecha 2->'+fecha);
                }
                 
                  
              
            }
            else {
               $(this).parent().css("background-color", "#FFFFFF");
            }
            
            
           
            
        })

   }
</script>
@endsection