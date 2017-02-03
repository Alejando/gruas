
<div class="form-group col-sm-12 col-lg-12">
  <h3>Asignación </h3>
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cabinero_took_service', 'Cabinero que tomo el Servicio:*') !!}
    @if($service->estatus=="Cotizacion")
    {!! Form::text('cabinero_took_service',Auth::user()->name,['class' => 'form-control','readonly']) !!}
    @else
    {!! Form::text('cabinero_took_service',null,['class' => 'form-control','readonly']) !!}
    @endif
</div>
@if($service->operator_assigned!="Ninguno" || $service->unit_assigned!="Ninguno")
     @role('cabinero')
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('unit_assigned', 'Unidad Asignada:*') !!}
            {!! Form::select('unit_assigned',[$service->unit_assigned=>$service->unit_assigned],null, ['class' => 'form-control','required']) !!}
        </div>

        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('operator_assigned', 'Operador Asignado:*') !!}
            {!! Form::select('operator_assigned',[$service->operator_assigned=>$service->operator_assigned],null,  ['class' => 'form-control','required']) !!}
        </div>
    @endrole
     @role('admin')
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('unit_assigned', 'Unidad Asignada:*') !!}
            {!! Form::select('unit_assigned',$units,null, ['class' => 'form-control','required']) !!}
        </div>

        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('operator_assigned', 'Operador Asignado:*') !!}
            {!! Form::select('operator_assigned',$operators,null,  ['class' => 'form-control','required']) !!}
        </div>
    @endrole
    
@else
    @role('admin')
        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('unit_assigned', 'Unidad Asignada:*') !!}
            {!! Form::select('unit_assigned',$units,null, ['class' => 'form-control','required']) !!}
        </div>

        <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('operator_assigned', 'Operador Asignado:*') !!}
            {!! Form::select('operator_assigned',$operators,null,  ['class' => 'form-control','required']) !!}
        </div>
    @endrole

@endif
<div class="form-group col-sm-12 col-lg-12">
  <h3>Tiempos</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_request', 'Hora de solicitud del Servicio:*') !!}
    {!! Form::text('time_request', null, ['class' => 'date-picker form-control','disabled']) !!}
    
</div>
@if($service->estatus=="Cotizacion")
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_promise', 'Hora estimada de Arribo:*') !!}
    
    <input type="text" name="time_promise" class="date-picker form-control" required >
</div>
        @if($service->operator_assigned=="Ninguno" || $service->unit_assigned=="Ninguno")

            <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('estatus', 'Estatus:*') !!}
                {!! Form::select('estatus', ['Sin Asignar'=>'Sin Asignar'], null, ['class' => 'form-control']) !!}
            </div>
        @else
            <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('estatus', 'Estatus:*') !!}
               {!! Form::select('estatus', ['Asignado' => 'Asignado'], null, ['class' => 'form-control','id'=>'noEstatus']) !!}
            </div>
        @endif
@else
    <div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_promise', 'Hora estimada de Arribo:*') !!}
    {!! Form::text('time_promise',null, ['class' => 'date-picker form-control','disabled']) !!}
    {{-- <input type="text" name="time_promise" class="date-picker form-control" disabled value="{{date('Y/m/d/  H:i:s')}}"> --}}

    </div>
    @if($service->operator_assigned=="Ninguno" || $service->unit_assigned=="Ninguno")

    <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('estatus', 'Estatus:*') !!}
        {!! Form::select('estatus', ['Sin Asignar'=>'Sin Asignar','Asignado' => 'Asignado'], null, ['class' => 'form-control']) !!}
    </div>
    @else
        
            <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('estatus', 'Estatus:*') !!}
               {!! Form::select('estatus', [$service->estatus => $service->estatus], null, ['class' => 'form-control','id'=>'noEstatus']) !!}
            </div>
    @endif
@endif
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_method', 'Metodo de pago:') !!}
    {!! Form::select('payment_method',['Efectivo' => 'Efectivo', 'Tarjeta de débito' => 'Tarjeta de débito', 'Tarjeta de Crédito' => 'Tarjeta de Crédito', 'Transferencia bancaria' => 'Transferencia bancaria', 'Cheque' => 'Cheque','Credito' => 'Credito','Inventario'=>'Inventario'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_received', 'Estatus del pago:') !!}
    {!! Form::select('payment_received',[$service->payment_received => $service->payment_received], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-8">
    {!! Form::label('nota', 'Detalles del servicios:') !!}
    {!! Form::textArea('nota', null, ['class' => 'form-control','placeholder'=>'Puedes agregar cualquier nota referente al servicio  que no este contenplado en el formulario.']) !!}
</div>
<div class="form-group col-sm-12">
    @if($service->estatus=="Terminado")
       @role('admin')
            {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
        @endrole
    
    @else
        {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
    
    @endif
    <a class="btn btn-primary" href="{{ URL::previous() }}"> Regresar</a>
</div>
