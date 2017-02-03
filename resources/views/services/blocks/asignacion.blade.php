<div class="form-group col-sm-12 col-lg-12">
  <h3>Asignación </h3>
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cabinero_took_service', 'Cabinero que tomo el Servicio:*') !!}
    {!! Form::select('cabinero_took_service',[Auth::user()->name => Auth::user()->name],null,['class' => 'form-control','required']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('unit_assigned', 'Unidad Asignada:') !!}
    {!! Form::select('unit_assigned',$units,null, ['class' => 'form-control','required']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('operator_assigned', 'Operador Asignado:') !!}
    {!! Form::select('operator_assigned',$operators,'Sin Asignar', ['class' => 'form-control','required']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h4>Tiempos</h4>
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('time_promise', 'Hora estimada de Arribo:*') !!}
   {!! Form::text('time_promise','', ['class' => 'date-picker form-control cotizacion','required']) !!}
    {{-- <input type="text" name="time_promise" class="date-picker form-control" disabled value="{{date('Y/m/d/  H:i:s')}}"> --}}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estatus', 'Estatus:*') !!}
    {!! Form::select('estatus', ['Sin Asignar'=>'Sin Asignar','Asignado' => 'Asignado'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_method', 'Metodo de pago:') !!}
    {!! Form::select('payment_method',['Efectivo' => 'Efectivo', 'Tarjeta de débito' => 'Tarjeta de débito', 'Tarjeta de Crédito' => 'Tarjeta de Crédito', 'Transferencia bancaria' => 'Transferencia bancaria', 'Cheque' => 'Cheque','Credito' => 'Credito','Inventario'=>'Inventario'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_received', 'Estatus del pago:') !!}
    {!! Form::select('payment_received',['No recibido' => 'No recibido', 'Recibido' => 'Recibido'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-8">
    {!! Form::label('nota', 'Detalles del servicios:') !!}
    {!! Form::textArea('nota', null, ['class' => 'form-control','placeholder'=>'Puedes agregar cualquier nota referente al servicio  que no este contenplado en el formulario.']) !!}
</div>


<div class="form-group col-sm-12">
        <label>Guardar Como:</label>
    <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tipoReport" checked>
        <label class="onoffswitch-label" for="tipoReport">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
    <br>
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
    <a class="btn btn-primary" href="{{ URL::previous() }}"> Regresar</a>

</div>