    {{-- Etiqueta Servicio Particular 
 --}}
{{--  
<fieldset>

<legend>General</legend> --}}
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('report_number', 'Numero de reporte:*') !!}
    {!! Form::text('report_number', null, ['class' => 'form-control']) !!}
</div>
 <div class="form-group col-sm-12 col-lg-12">
  <h3>Datos cliente</h3>
   {!! Form::hidden('service_type', 'Movilidad', ['class' => 'form-control','id'=>'tipoServicio']) !!}
</div>
         
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_requests', 'Nombre quien solicita:*') !!}
    {!! Form::text('name_requests', null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<!--- Phone Requests Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('patrol', 'Patrulla en sitio:*') !!}
    {!! Form::text('patrol', null, ['class' => 'form-control','required']) !!}
</div>


<div class="form-group col-sm-12 col-lg-12">
  <h3>Datos del vehículo</h3>
</div>

<!--- Vehicle Type Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('vehicle_type', 'Tipo de vehículo:*') !!}
    {!! Form::text('vehicle_type', null, ['class' => 'form-control','required' =>'true']) !!}
</div>

<!--- Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('brand', 'Marca:*') !!}
    {!! Form::select('brand',$brands,null, ['id'=>'brand', 'class' => 'form-control','required' =>'true']) !!}
</div>

<!--- Sub Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sub_brand', 'Submarca:') !!}
    {!! Form::select('sub_brand',[''=>''],null, ['id'=>'subbrand', 'class' => 'form-control']) !!}
</div>

<!--- Model Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('model', 'Modelo:') !!}
    {!! Form::select('model',$models,null, ['id'=>'Model', 'class' => 'form-control']) !!}
</div>

<!--- Color Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!--- License Plate Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('license_plate', 'Placas:') !!}
    {!! Form::text('license_plate', null, ['class' => 'form-control']) !!}
</div>

<!--- Failure Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('failure', 'Falla:') !!}
    {!! Form::text('failure', null, ['class' => 'form-control']) !!}
</div>



{{-- </fieldset>
<fieldset>
<legend>Ubicación</legend>
 --}}
<div class="form-group col-sm-12 col-lg-12">
  <h3>Ubicación Destino</h3>
</div>
<!--- Street Is Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('street_is', 'Calle:*') !!}
    {!! Form::text('street_is', null, [ 'class' => 'form-control', 'id'=>'street_is','required']) !!}
    {{-- <input type="text" name="street_is" id="txt1" class="form-control" placeholder="Introduce localización" /> --}}
</div>

<!--- Number Is Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number_is', 'Número:') !!}
    {!! Form::text('number_is', null, ['class' => 'form-control','id'=>'number_is']) !!}
</div>

<!--- Between Streets Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('between_streets', 'Entre calles:*') !!}
    {!! Form::text('between_streets', null, ['class' => 'form-control','required']) !!}
     {{-- <input type="text" name="between_streets" id="txt2" class="form-control" placeholder="Introduce localización" /> --}}
</div>

<!--- Colony Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control','id'=>'colony']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
     {!! Form::text('municipality', null, ['class' => 'form-control','id'=>'municipality']) !!}
</div>

<!--- References Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('references', 'Referencias:') !!}
    {!! Form::text('references', null, ['class' => 'form-control']) !!}
</div>
<!--- Observations  Field --->
<div class="form-group col-sm-8 col-lg-8">
    {!! Form::label('observations', 'Observaciones:') !!}
    {!! Form::text('observations', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-4 col-lg-4">
    <input style="margin-top: 7%;" type="button" class="btn btn-primary" id="updateRute"  value="Actualizar ruta">
</div>
<div class="gmap " id="mapaOrigen" >

</div>


<!--- Street Deliver Field --->
<div class="form-group col-sm-12 col-lg-12">
  <h3>Ubicación destino</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('street_deliver', 'Calle de entrega:') !!}
   {!! Form::text('street_deliver', null, [ 'class' => 'form-control','id'=>'street_deliver']) !!}
</div>

<!--- Number Deliver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number_deliver', 'Número de entrega:') !!}
    {!! Form::text('number_deliver', null, ['class' => 'form-control','id'=>'number_deliver']) !!}
</div>

<!--- Between Streets Deliver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('between_streets_deliver', 'Cruces:') !!}
    {!! Form::text('between_streets_deliver', null, ['class' => 'form-control']) !!}
</div>

<!--- Colony Deliver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony_deliver', 'Colonia de entrega:') !!}
   {!! Form::text('colony_deliver', null, ['class' => 'form-control','id'=>'colony_deliver']) !!}
</div>

<!--- Municipality Deliver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality_deliver', 'Municipio de entrega:') !!}
    {!! Form::text('municipality_deliver', null, ['class' => 'form-control','id'=>'municipality_deliver']) !!}
</div>

<!--- References Deliver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('references_deliver', 'Referencias de entrega:') !!}
    {!! Form::text('references_deliver', null, ['class' => 'form-control']) !!}
</div>

<!--- Observations Deliver Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observations_deliver', 'Observaciones:') !!}
    {!! Form::text('observations_deliver', null, ['class' => 'form-control']) !!}
</div>
{{-- </fieldset>
<fieldset>
<legend>Costos</legend> --}}
<div class="form-group col-sm-12 col-lg-12">
  <h3>Costos</h3>
</div>

<!--- Type Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo:*') !!}
    {!! Form::select('type',$types,null,['id'=>'type', 'class' => 'form-control','ng-change'=>'tipo()','ng-model'=>'tipoDato']) !!}
</div>

<!--- Description Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción:*') !!}
    {!! Form::text('description',null,['id'=>'description', 'class' => 'form-control','readonly','ng-model'=>'particular.description']) !!}
</div>

<!--- Zone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('zone', 'Zona:*') !!}
    {!! Form::select('zone',['sl' => 'Servicio local','vs'=>'Vuelta sencilla','tg'=>'Tlajomulco a Gdl','dfg'=>'Depósito fuera de Gdl'],null, ['class' => 'form-control','id'=>'tipoZona','ng-change'=>'zone()','ng-model'=>'tipoZona']) !!}
</div>

 <!--- Extra Kilometers Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('extra_kilometers', 'Kilometros Extra:') !!}
    {!! Form::text('extra_kilometers', null, ['class' => 'form-control','ng-model'=>'extra_kilometers']) !!}
</div>
<!--- Load Field --->
<div class="form-group col-sm-6 col-lg-4 ">
    {!! Form::label('carga', 'Carga:*') !!}
    {!! Form::select('carga',['25' => '25%', '50' => '50%', '75' => '75%', '100' => '100%'], null, ['class' => 'form-control','ng-model'=>'carga']) !!}
</div>

<!--- Hours Maneuver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('hours_maneuver', 'Horas de Maniobra:') !!}
    {!! Form::text('hours_maneuver', null, ['class' => 'form-control','ng-model'=>'hours_maneuver']) !!}
</div>

<!--- Hours Wait Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('hours_wait', 'Horas de Espera:') !!}
    {!! Form::text('hours_wait', null, ['class' => 'form-control','ng-model'=>'hours_wait']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('hora_acondicionamiento', 'Horas de Acondicionamiento:') !!}
    {!! Form::text('hora_acondicionamiento', null, ['class' => 'form-control','ng-model'=>'hora_acondicionamiento']) !!}
</div>

<!--- Use Dolly Field --->
<div class="form-group col-sm-6 col-lg-4 ">
    {!! Form::label('use_dolly', 'Dolly:') !!}
    {!! Form::select('use_dolly', ['si' => "SI", 'no' => "NO"], null, ['class' => 'form-control','ng-model'=>'use_dolly']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4 ">
    {!! Form::label('iva', 'I.V.A.:') !!}
    {!! Form::select('iva', ['si' => "SI", 'no' => "NO"], null, ['class' => 'form-control','ng-model'=>'iva']) !!}
</div>


<!--- Base Price Field --->
<div class="form-group col-sm-6 col-lg-4">
   
    {!! Form::hidden('base_price', null, ['class' => 'form-control','ng-model'=>'precioBase']) !!}
</div>

<!--- Kilometer Extra Price Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('kilometer_extra_price', null, ['class' => 'form-control','ng-model'=>'particular.cost_kilometer']) !!}
</div>

<!--- Maneuver Price Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('maneuver_price', null, ['class' => 'form-control','ng-model'=>'particular.maneuvers']) !!}
</div>

<!--- Wait Price Field---> 
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('wait_price', null, ['class' => 'form-control','ng-model'=>'particular.wait_hour']) !!}
    {!! Form::hidden('precio_acondicionamiento', null, ['class' => 'form-control','ng-model'=>'particular.conditioning_hour']) !!}
</div>

<!--- Dolly Price Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::hidden('dolly_price', null, ['class' => 'form-control','ng-model'=>'particular.dolly_use']) !!}
</div>

    <div class="form-group col-sm-12 col-lg-8 col-lg-offset-2">
        <table width="100%" class="table table-striped">
            <thead>
                <th>Concepto</th>
                <th>Costo</th>
                <th>Cantidad</th>
                <th>Total</th>
            </thead>
            <tbody >
                <tr>
                    <td><b>Zona</b>  </td>
                    <td>$@{{ zone() | number:2}}</td>
                    <td></td>
                    <td>$@{{ zone() | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Km adicionales:</b> </td>
                    <td>$@{{particular.cost_kilometer | number:2}}</td>
                    <td>@{{extra_kilometers }}</td>
                    <td>$@{{extra_kilometers*particular.cost_kilometer | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Carga:</b> </td>
                    <td>$290.00</td>
                    <td>@{{carga}}%</td>
                    <td>$@{{(carga*290)/100 | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Maniobras:</b> </td>
                    <td>$@{{particular.maneuvers | number:2}}</td>
                    <td>@{{hours_maneuver}}</td>
                    <td>$@{{hours_maneuver*particular.maneuvers | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Espera: </b></td>
                    <td>$@{{particular.wait_hour | number:2}}</td>
                    <td>@{{hours_wait}}</td>
                    <td>$@{{hours_wait*particular.wait_hour | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Acondicionamiento:</b> </td>
                    <td>$@{{particular.conditioning_hour | number:2}}</td>
                    <td>@{{hora_acondicionamiento}}</td>
                    <td>$@{{hora_acondicionamiento*particular.conditioning_hour | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Dolly:</b> </td>
                    <td>@{{particular.dolly_use | number:2}}</td>
                    <td>@{{use_dolly |uppercase}}</td>
                    <td ng-if="use_dolly=='si'">@{{particular.dolly_use | number:2}}</td>
                    <td ng-if="use_dolly=='no'">$0.00</td>
                </tr>
                <tr>
                    <td><b>Sub total:</b> </td>
                    <td></td>
                    <td></td>
                    <td>@{{subtotal() | number:2}}</td>
                </tr>
                <tr>
                    <td><b>I.V.A. (16%):</b> </td>
                    <td></td>
                    <td></td>
                    <td ng-show="iva=='si'">$@{{subtotal()*.16 | number:2}}</td>
                    <td ng-if="iva=='no'">$0.00</td>
                </tr>
                <tr>
                    <td><b>Total:</b> </td>
                    <td></td>
                    <td></td>
                    <td>$@{{totalService() | number:2}}</td>
                </tr>
            </tbody>
        </table>  
    </div>
    <div class="form-group col-sm-12 col-lg-12 col-lg-offset-2">
    </div>
{{--  </fieldset>
 <fieldset>

<legend>Asignación y tiempos</legend> --}}
<!--- Payment Received Field --->
<div class="form-group col-sm-12 col-lg-12">
  <h3>Asignación </h3>
</div>

{{-- <div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_received', 'Estatus del pago:') !!}
    {!! Form::select('payment_received',['En proceso' => 'En proceso', 'En cabina' => 'En cabina', 'En caja' => 'En caja'], null, ['class' => 'form-control']) !!}
</div> --}}

<!--- Cabinero Took Service Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cabinero_took_service', 'Cabinero que tomo el Servicio:*') !!}
    {!! Form::select('cabinero_took_service',$cabineros,null,['class' => 'form-control','required']) !!}
</div>

<!--- Unit Assigned Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('unit_assigned', 'Unidad Asignada:') !!}
    {!! Form::select('unit_assigned',$units,null, ['class' => 'form-control']) !!}
</div>

<!--- Operator Assigned Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('operator_assigned', 'Operador Asignado:') !!}
    {!! Form::select('operator_assigned',$operators,null,  ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h4>Tiempos</h4>
</div>
<!--- Time Request Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_request', 'Hora de solicitud del Servicio:*') !!}
   {{--  {!! Form::text('time_request', null, ['class' => 'date-picker form-control','required']) !!} --}}
    <input type="text" name="time_request" class="date-picker form-control" required value="{{date('Y/m/d/  H:i:s')}}">
</div>

<!--- Time Promise Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_promise', 'Hora estimada de Arribo:') !!}
    {!! Form::text('time_promise',null, ['class' => 'date-picker form-control',]) !!}
   {{--  <input type="text" name="time_promise" class="date-picker form-control" required value="{{date('Y/m/d/  H:i:s')}}"> --}}
</div>


<!--- Estatus Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estatus', 'Estatus:*') !!}
    {!! Form::select('estatus', ['Asigando' => 'Asignado'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
{{-- </fieldset> --}}