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


<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <p style="margin-top: 10px"><h3>Reportes Activos</h3></p>
    </div>
    <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge just-time">5</span> A tiempo
   </div>
   <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge ten-minutes">4</span> > a 10mins
   </div>
   <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge fifteen-minutes">3</span> > a 15mins
   </div>
   <div class="col-md-1" style="margin-top: 20px;">
     <span class="badge">2</span> Sin asignar
   </div>
   <div class="col-md-2"></div>
   <div class="col-md-2">
    <a class="btn btn-default btn-md pull-right" style="margin-top: 10px" href="#">Nueva Cotización</a>
  </div>
  <div class="col-md-2">
    <a class="btn my-btn btn-md" style="margin-top: 10px" data-toggle="modal" data-target="#myModal">Nuevo Reporte</a>
  </div>
</div>
</div>
<div class="container">

  @include('flash::message')

  <div class="row">
    <h1 class="pull-left">Services</h1>
    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('services.create') !!}">Add New</a>
  </div>

<div class="row">
  @if($services->isEmpty())
  <div class="well text-center">No hay registros.</div>
  @else
  <table class="table">
    <thead>
      <th>Name Requests</th>
      <th>Phone Requests</th>
      <th>Name Wait</th>
      <th>Phone Wait</th>
      <th>Email Request</th>
      <th>Vehicle Type</th>
      <th>Brand</th>
      <th>Sub Brand</th>
      <th>Color</th>
      <th>License Plate</th>
      <th>Failure</th>
      <th>Load</th>
      <th>Street Is</th>
      <th>Number Is</th>
      <th>Between Streets</th>
      <th>Colony</th>
      <th>Municipality</th>
      <th>References</th>
      <th>Street Deliver</th>
      <th>Number Deliver</th>
      <th>Colony Deliver</th>
      <th>Municipality Deliver</th>
      <th>References Deliver</th>
      <th>Observations Deliver</th>
      <th>Type</th>
      <th>Description</th>
      <th>Zone</th>
      <th>Extra Kilometers</th>
      <th>Hours Maneuver</th>
      <th>Hours Wait</th>
      <th>Use Dolly</th>
      <th>Base Price</th>
      <th>Kilometer Extra Price</th>
      <th>Maneuver Price</th>
      <th>Wait Price</th>
      <th>Dolly Price</th>
      <th>Payment Method</th>
      <th>Payment Received</th>
      <th>Cabinero Took Service</th>
      <th>Unit Assigned</th>
      <th>Operator Assigned</th>
      <th>Time Request</th>
      <th>Time Promise</th>
      <th>Real Time</th>
      <th>End Time</th>
      <th>Estatus</th>
      <th>Compliment</th>
      <th width="50px">Action</th>
    </thead>
    <tbody>

      @foreach($services as $service)
      <tr>
        <td>{!! $service->name_requests !!}</td>
        <td>{!! $service->phone_requests !!}</td>
        <td>{!! $service->name_wait !!}</td>
        <td>{!! $service->phone_wait !!}</td>
        <td>{!! $service->email_request !!}</td>
        <td>{!! $service->vehicle_type !!}</td>
        <td>{!! $service->brand !!}</td>
        <td>{!! $service->sub_brand !!}</td>
        <td>{!! $service->color !!}</td>
        <td>{!! $service->license_plate !!}</td>
        <td>{!! $service->failure !!}</td>
        <td>{!! $service->load !!}</td>
        <td>{!! $service->street_is !!}</td>
        <td>{!! $service->number_is !!}</td>
        <td>{!! $service->between_streets !!}</td>
        <td>{!! $service->colony !!}</td>
        <td>{!! $service->municipality !!}</td>
        <td>{!! $service->references !!}</td>
        <td>{!! $service->street_deliver !!}</td>
        <td>{!! $service->number_deliver !!}</td>
        <td>{!! $service->colony_deliver !!}</td>
        <td>{!! $service->municipality_deliver !!}</td>
        <td>{!! $service->references_deliver !!}</td>
        <td>{!! $service->observations_deliver !!}</td>
        <td>{!! $service->type !!}</td>
        <td>{!! $service->description !!}</td>
        <td>{!! $service->zone !!}</td>
        <td>{!! $service->extra_kilometers !!}</td>
        <td>{!! $service->hours_maneuver !!}</td>
        <td>{!! $service->hours_wait !!}</td>
        <td>{!! $service->use_dolly !!}</td>
        <td>{!! $service->base_price !!}</td>
        <td>{!! $service->kilometer_extra_price !!}</td>
        <td>{!! $service->maneuver_price !!}</td>
        <td>{!! $service->wait_price !!}</td>
        <td>{!! $service->dolly_price !!}</td>
        <td>{!! $service->payment_method !!}</td>
        <td>{!! $service->payment_received !!}</td>
        <td>{!! $service->cabinero_took_service !!}</td>
        <td>{!! $service->unit_assigned !!}</td>
        <td>{!! $service->operator_assigned !!}</td>
        <td>{!! $service->time_request !!}</td>
        <td>{!! $service->time_promise !!}</td>
        <td>{!! $service->real_time !!}</td>
        <td>{!! $service->end_time !!}</td>
        <td>{!! $service->estatus !!}</td>
        <td>{!! $service->compliment !!}</td>
        <td>
          <a href="{!! route('services.edit', [$service->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{!! route('services.delete', [$service->id]) !!}" onclick="return confirm('Are you sure wants to delete this Service?')"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>
</div>
@endsection