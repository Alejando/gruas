    {{-- Etiqueta Servicio Policia
 --}}

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('report_number', 'Numero de reporte:*') !!}
    {!! Form::text('report_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h2>Datos del cliente</h2>
   {!! Form::hidden('service_type', 'Policia', ['class' => 'form-control']) !!}
</div>
<!--- Name Requests Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_requests', 'Nombre quien solicita:*') !!}
    {!! Form::text('name_requests', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Requests Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('patrol', 'Patrulla en sitio:*') !!}
    {!! Form::text('patrol', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group col-sm-12 col-lg-12">
  <h2>Datos del vehículo</h2>
</div>

<!--- Vehicle Type Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('vehicle_type', 'Tipo de vehículo:*') !!}
    {!! Form::text('vehicle_type', null, ['class' => 'form-control']) !!}
</div>

<!--- Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('brand', 'Marca:*') !!}
    {!! Form::select('brand', $brands, null, ['id'=>'brand', 'class' => 'form-control']) !!}
</div>

<!--- Sub Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sub_brand', 'Submarca:*') !!}
    {!! Form::select('sub_brand', $subbrands, null, ['id'=>'subbrand', 'class' => 'form-control']) !!}
</div>

<!--- Model Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('model', 'Modelo:') !!}
    {!! Form::select('model', $models, null, ['id'=>'Model', 'class' => 'form-control']) !!}
</div>

<!--- Color Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!--- License Plate Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('license_plate', 'Placas:*') !!}
    {!! Form::text('license_plate', null, ['class' => 'form-control']) !!}
</div>

<!--- Failure Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('failure', 'Falla:*') !!}
    {!! Form::text('failure', null, ['class' => 'form-control']) !!}
</div>

<!--- Load Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('load', 'Carga:*') !!}
    {!! Form::select('load',['25' => '25%', '50' => '50%', '75' => '75%', '100' => '100%'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h2>Datos recoger</h2>
</div>
<!--- Street Is Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('street_is', 'Calle:*') !!}
    {!! Form::text('street_is', null, [ 'class' => 'form-control']) !!}
    {{-- <input type="text" name="street_is" id="txt1" class="form-control" placeholder="Introduce localización" /> --}}
</div>

<!--- Number Is Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number_is', 'Número:') !!}
    {!! Form::text('number_is', null, ['class' => 'form-control']) !!}
</div>

<!--- Between Streets Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('between_streets', 'Entre calles:*') !!}
    {!! Form::text('between_streets', null, ['class' => 'form-control']) !!}
     {{-- <input type="text" name="between_streets" id="txt2" class="form-control" placeholder="Introduce localización" /> --}}
</div>

<!--- Colony Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control']) !!}
</div>

<!--- Municipality Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
    <input type="text" name="municipality" id="txt4" class="form-control" placeholder="Introduce municipio" />
</div>

<!--- References Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('references', 'Referencias:') !!}
    {!! Form::text('references', null, ['class' => 'form-control']) !!}
</div>
<!--- Observations  Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('observations', 'Observaciones:') !!}
    {!! Form::text('observations', null, ['class' => 'form-control']) !!}
</div>

<!--- Street Deliver Field --->
<div class="form-group col-sm-12 col-lg-12">
  <h2>Datos entregar</h2>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('street_deliver', 'Calle de entrega:*') !!}
   {!! Form::text('street_deliver', null, [ 'class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
  <h2>Precio</h2>
</div>
<!--- Type Field --->

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo:*') !!}
    {!! Form::select('type', $types, null, ['id'=>'Type', 'class' => 'form-control']) !!}
</div>


{{-- <!--- Extra Kilometers Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('extra_kilometers', 'Kilometros Extra:') !!}
    {!! Form::text('extra_kilometers', null, ['class' => 'form-control']) !!}
</div>

<!--- Hours Maneuver Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('hours_maneuver', 'Horas de Maniobra:') !!}
    {!! Form::text('hours_maneuver', null, ['class' => 'form-control']) !!}
</div>

<!--- Hours Wait Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('hours_wait', 'Horas de Espera:') !!}
    {!! Form::text('hours_wait', null, ['class' => 'form-control']) !!}
</div>

<!--- Use Dolly Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('use_dolly', 'Dolly:') !!}
    {!! Form::select('use_dolly', ['si' => "SI", 'no' => "NO"], null, ['class' => 'form-control']) !!}
</div>

<!--- Base Price Field 
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('base_price', 'Base Price:') !!}
    {!! Form::text('base_price', null, ['class' => 'form-control']) !!}
</div>--->

<!--- Kilometer Extra Price Field 
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('kilometer_extra_price', 'Kilometer Extra Price:') !!}
    {!! Form::text('kilometer_extra_price', null, ['class' => 'form-control']) !!}
</div>--->

<!--- Maneuver Price Field 
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuver_price', 'Maneuver Price:') !!}
    {!! Form::text('maneuver_price', null, ['class' => 'form-control']) !!}
</div>--->

<!--- Wait Price Field 
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_price', 'Wait Price:') !!}
    {!! Form::text('wait_price', null, ['class' => 'form-control']) !!}
</div>--->

<!--- Dolly Price Field 
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_price', 'Dolly Price:') !!}
    {!! Form::text('dolly_price', null, ['class' => 'form-control']) !!}
</div>--->

<!--- Payment Method Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_method', 'Metodo de pago:') !!}
    {!! Form::select('payment_method',['Efectivo' => 'Efectivo', 'Tarjeta de débito' => 'Tarjeta de débito', 'Tarjeta de Crédito' => 'Tarjeta de Crédito', 'Transferencia bancaria' => 'Transferencia bancaria', 'Cheque' => 'Cheque','Credito' => 'Credito'], null, ['class' => 'form-control']) !!}
</div>
 --}}
<div class="form-group col-sm-12 col-lg-12">
  <h2>Asignación</h2>
</div>
<!--- Payment Received Field --->

{{-- <div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_received', 'Estatus del pago:') !!}
    {!! Form::select('payment_received',['En proceso' => 'En proceso', 'En cabina' => 'En cabina', 'En caja' => 'En caja'], null, ['class' => 'form-control']) !!}
</div> --}}

<!--- Cabinero Took Service Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cabinero_took_service', 'Cabinero que tomo el Servicio:*') !!}
    {!! Form::select('cabinero_took_service', $cabineros, null, ['class' => 'form-control']) !!}
</div>

<!--- Unit Assigned Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('unit_assigned', 'Unidad Asignada:*') !!}
    {!! Form::select('unit_assigned', $units, null, ['class' => 'form-control']) !!}
</div>

<!--- Operator Assigned Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('operator_assigned', 'Operador Asignado:*') !!}
    {!! Form::select('operator_assigned', $operators, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h2>Tiempos</h2>
</div>
<!--- Time Request Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_request', 'Hora de solicitud del Servicio:*') !!}
    {!! Form::text('time_request', null, ['class' => 'date-picker form-control']) !!}
</div>

<!--- Time Promise Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_promise', 'Hora estimada de Arribo:*') !!}
    {!! Form::text('time_promise', null, ['class' => 'date-picker form-control']) !!}
</div>
{{-- 
<!--- Real Time Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('real_time', 'Hora de arribo Real:') !!}
    {!! Form::text('real_time', null, ['class' => 'form-control']) !!}
</div>

<!--- End Time Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('end_time', 'Hora de Termino de Servicio:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control']) !!}
</div>
 --}}
<!--- Estatus Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estatus', 'Estatus:*') !!}
    {!! Form::select('estatus', ['Asigando' => 'Asignado', 'Arribado' => 'Arribado', 'Cancelado' => 'Cancelado'], null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
