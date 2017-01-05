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



<div class="container" style="width: 90%">
  <div class="row">
    <div class="col-md-3">
      <p style="margin-top: 10px"><h2><b>Reportes Activos</b></h2></p>
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
   
   <div class="col-md-1"></div>
   <div class="col-md-2">
    <a class="btn btn-default btn-md pull-right" style="margin-top: 10px" data-toggle="modal" data-target="#modalCotizacion">Nueva Cotización</a>
  </div>
  <div class="col-md-2">
    <a class="btn my-btn btn-md pull-right" style="margin-top: 10px" data-toggle="modal" data-target="#myModal">Nuevo Reporte</a>
  </div>
</div>
</div>
<div class="container" style="width: 90%; background-color:#E6E6E6;">

  @include('flash::message')

  <div class="row">
    <br>
  </div>

<div class="table-responsive">
  @if($services->isEmpty())
  <div class="well text-center">No hay registros.</div>
  @else
  <table class="table table-striped" id="activos">
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
      <tr >
        <td  style="vertical-align: middle;">{!! $service->id !!}</td>
        <td style="vertical-align: middle;">{!! $service->service_type !!}</td>
        <td style="vertical-align: middle;"><b>{!! $service->unit_assigned !!}</b></td>
        <td style="vertical-align: middle;"><b>{!! $service->operator_assigned !!}</b></td>
        <td style="vertical-align: middle;">{!! $service->sub_brand !!}</td>
        <td style="vertical-align: middle;">{!! $service->time_request !!}</td>
        <td style="vertical-align: middle;">{!! $service->street_is !!}, #{!! $service->number_is !!}, {!! $service->colony !!}, {!! $service->municipality !!}</td>
        <td style="vertical-align: middle;" class="arriboEstimado">{!! $service->time_promise !!}</td>
        <td style="vertical-align: middle;">
          @if($service->real_time=="0000-00-00 00:00:00")
            <a class="btn btn-danger" href="{!! route('registrarArribo', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas registrar el arribo?')">Arribar <i class="glyphicon glyphicon-send" > </i></a>
          @else
            {!! $service->real_time !!}
          @endif
        </td>
        <td style="vertical-align: middle;" class="estatus">
          @if($service->estatus=="Arribado" && $service->payment_received=="Recibido")
            <a class="btn btn-success" href="{!! route('registrarTermino', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas terminar el servicio?')"> Terminar <i class="glyphicon glyphicon-ok" ></i></a>
          @else
          {!! $service->estatus !!}
          @endif
        </td>
        <td style="vertical-align: middle;">
           @if($service->payment_received!= "Recibido")
            <a class="btn btn-warning" href="{!! route('registrarPago', [$service->id]) !!}" onclick="return confirm('¿Estas seguro de que deseas Registrar el pago?')"> Pagar <i class="glyphicon glyphicon-usd" ></i></a>
          @else
            {!! $service->payment_received !!}
          @endif
        </td>

        <td style="vertical-align: middle;" ><div class="btn-group">
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
@section('footer')
      <div class="container" style="width: 90%">       
@endsection
@section('js')
<script type="text/javascript">
   $(document).ready(function() {
        $('#activos').DataTable({
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
        "order": [[ 7, 'asc' ]]
        });

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
                   $(this).parent().css({"background-color":"#FF0020","color":"#FFFFFF"});
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