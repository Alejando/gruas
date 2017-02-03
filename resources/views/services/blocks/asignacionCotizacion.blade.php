
<div class="form-group col-sm-12 col-lg-12">
  <h3>Asignación </h3>
</div>



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cabinero_took_service', 'Cabinero que tomo el Servicio:*') !!}
    {!! Form::select('cabinero_took_service',[Auth::user()->name => Auth::user()->name],null,['class' => 'form-control','required']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('unit_assigned', 'Unidad Asignada:') !!}
    {!! Form::select('unit_assigned',$units,null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('operator_assigned', 'Operador Asignado:') !!}
    {!! Form::select('operator_assigned',$operators,null,  ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h4>Tiempos</h4>
</div>



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_method', 'Metodo de pago:') !!}
    {!! Form::select('payment_method',['Efectivo' => 'Efectivo', 'Tarjeta de débito' => 'Tarjeta de débito', 'Tarjeta de Crédito' => 'Tarjeta de Crédito', 'Transferencia bancaria' => 'Transferencia bancaria', 'Cheque' => 'Cheque','Credito' => 'Credito','Inventario'=>'Inventario'], null, ['class' => 'form-control']) !!}
</div>



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estatus', 'Estatus:*') !!}
    {!! Form::select('estatus', ['Cotizacion' => 'Cotizacion'], null, ['class' => 'form-control','id'=>'noEstatus']) !!}
</div>
<div class="form-group col-sm-6 col-lg-8">
    {!! Form::label('nota', 'Detalles del servicios:') !!}
    {!! Form::textArea('nota', null, ['class' => 'form-control','placeholder'=>'Puedes agregar cualquier nota referente al servicio  que no este contenplado en el formulario.']) !!}
</div>


<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
     <a class="btn btn-primary" href="{{ URL::previous() }}"> Regresar</a>
</div>