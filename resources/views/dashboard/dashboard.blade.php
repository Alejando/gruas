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
       <form class="form-horizontal" role="form">
        
         <div class="modal-header">
          <h4 class="modal-title">Datos del vehiculo</h4>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Tipo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Tipo"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Marca</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Marca"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Submarca</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Submarca"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Modelo (Año)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Modelo (Año)"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Color</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Color"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Placas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Placas"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Falla</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Falla"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"
          for="inputPassword3" >Carga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control"
            id="inputPassword3" placeholder="Carga"/>
          </div>
        </div>
      </form> 
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


@endsection
