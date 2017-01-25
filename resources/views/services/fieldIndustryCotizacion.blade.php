
 <div class="form-group col-sm-12 col-lg-12">
  <h3>Datos cliente</h3>
   {!! Form::hidden('service_type', 'Industrial', ['class' => 'form-control','id'=>'tipoServicio']) !!}
</div>
         
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_requests', 'Nombre quien solicita:*') !!}
    {!! Form::text('name_requests', null, ['class' => 'form-control','required' =>'true']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone_requests', 'Teléfono quien solicita:*') !!}
    {!! Form::text('phone_requests', null, ['class' => 'form-control','required' =>'true']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_wait', 'Nombre quien esta en el vehículo:') !!}
    {!! Form::text('name_wait', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone_wait', 'Teléfono quien esta en el vehículo:') !!}
    {!! Form::text('phone_wait', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4 ">
    {!! Form::label('email_request', 'Email:') !!}
    {!! Form::email('email_request', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
  <h3>Datos de la Máquina</h3>
</div>


<input type="hidden" id="brand">
<input type="hidden" id="subbrand">
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('machine_type', 'Tipo de máquina:*') !!}
    {!! Form::text('machine_type', null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('weight', 'Peso:*') !!}
    {!! Form::text('weight', null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('measure', 'Medidas:*') !!}
    {!! Form::text('measure', null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    
    {!! Form::label('platform_move', 'Traslado en plataforma:*') !!}
    {!! Form::select('platform_move',['Si'=>'Si','No'=>'No'], null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    
    {!! Form::label('wheel', 'Ruedas:*') !!}
    {!! Form::select('wheel',['Si'=>'Si','No'=>'No'], null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('machine_works', '¿Funciona la máquina?:*') !!}
    {!! Form::select('machine_works',['Si'=>'Si','No'=>'No'], null, ['class' => 'form-control','required' =>'true']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('obstructs', '¿Hay algo que estorbe a la máquina?') !!}
    {!! Form::text('obstructs', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('height', 'Altura y profundida requerida') !!}
    {!! Form::text('height', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h3>Ubicación Origen</h3>
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('street_is', 'Calle:*') !!}
    {!! Form::text('street_is', null, [ 'class' => 'form-control', 'id'=>'street_is','required']) !!}
    {{-- <input type="text" name="street_is" id="txt1" class="form-control" placeholder="Introduce localización" /> --}}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number_is', 'Número:') !!}
    {!! Form::text('number_is', null, ['class' => 'form-control','id'=>'number_is']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('between_streets', 'Entre calles:') !!}
    {!! Form::text('between_streets', null, ['class' => 'form-control',]) !!}
     {{-- <input type="text" name="between_streets" id="txt2" class="form-control" placeholder="Introduce localización" /> --}}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony', 'Colonia:') !!}
    {!! Form::text('colony', null, ['class' => 'form-control','id'=>'colony']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality', 'Municipio:') !!}
     {!! Form::text('municipality', null, ['class' => 'form-control','id'=>'municipality']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('references', 'Referencias:') !!}
    {!! Form::text('references', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observations', 'Observaciones:') !!}
    {!! Form::text('observations', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-12 col-lg-12">
  <h3>Ubicación Destino</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('street_deliver', 'Calle de entrega:') !!}
   {!! Form::text('street_deliver', null, [ 'class' => 'form-control','id'=>'street_deliver']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number_deliver', 'Número de entrega:') !!}
    {!! Form::text('number_deliver', null, ['class' => 'form-control','id'=>'number_deliver']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('between_streets_deliver', 'Entre calles:') !!}
    {!! Form::text('between_streets_deliver', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('colony_deliver', 'Colonia de entrega:') !!}
   {!! Form::text('colony_deliver', null, ['class' => 'form-control','id'=>'colony_deliver']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('municipality_deliver', 'Municipio de entrega:') !!}
    {!! Form::text('municipality_deliver', null, ['class' => 'form-control','id'=>'municipality_deliver']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('references_deliver', 'Referencias de entrega:') !!}
    {!! Form::text('references_deliver', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observations_deliver', 'Observaciones:') !!}
    {!! Form::text('observations_deliver', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-4 col-lg-4">
    <input style="margin-top: 7%;" type="button" class="btn btn-primary" id="updateRute"  value="Trazar ruta">
    <input style="margin-top: 7%;" type="button" class="btn btn-success" id="marcarPunto"  value="Marcar Origen">
</div>
<div class="form-group col-sm-4 col-lg-4">
    {!! Form::label('distancia', 'Distancia:') !!}
    {!! Form::text('distancia', null, ['class' => 'form-control','id'=>'distancia','readonly']) !!}
</div>
<div class="gmap " id="mapaOrigen" >

</div>

<div class="form-group col-sm-12 col-lg-12">
  <h3>Costos</h3>
</div>



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo:*',['id'=>"labelTipo"]) !!}
    {!! Form::select('type',$types,null,['id'=>'type', 'class' => 'form-control','ng-change'=>'tipo()','ng-model'=>'tipoDato']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción:*') !!}
    {!! Form::text('description',null,['id'=>'description', 'class' => 'form-control','readonly','ng-model'=>'particular.description']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('zone', 'Zona:*') !!}
    {!! Form::select('zone',['z1' => 'ZONA 1', 'z2' => 'ZONA 2', 'z3' => 'ZONA 3', 'z4' => 'ZONA 4', 'z5' => 'ZONA 5','sz' => 'Sin Zona'],null, ['class' => 'form-control','id'=>'tipoZona','ng-change'=>'zone()','ng-model'=>'tipoZona']) !!}
</div>


    <div class="form-group col-sm-12 col-lg-10 col-lg-offset-1">
        <table width="100%" class="table table-striped">
            <thead style="background:#B90E13;color:#ffffff">
                <th width="25%">Concepto</th>
                <th width="25%">Costo</th>
                <th width="25%">Cantidad</th>
                <th width="25%">Total</th>
            </thead>
            <tbody >
                 <tr>
                    <td><b>Zona</b>  </td>
                    <td>$@{{ zone() | number:2}}</td>
                    <td ng-show="tipoZona!='sz'"><input type="hidden" name="base_price" value="@{{zone()}}"></td>
                    <td ng-show="tipoZona=='sz'"> {!! Form::input('number','base_price', null, ['class' => 'form-control','ng-model'=>'zonaEditar','step'=>'.01','ng-disabled'=>"tipoZona!='sz'"]) !!}</td>
                    <td>$@{{ zone() | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Km adicionales: </b></td>
                    <td>{!! Form::input('text','kilometer_extra_price', null, ['class' => 'form-control','ng-model'=>'particular.cost_kilometer','readonly']) !!}</td>
                    <td> {!! Form::input('number','extra_kilometers', null, ['class' => 'form-control','ng-model'=>'extra_kilometers','step'=>'.01']) !!}</td>
                    <td>$@{{extra_kilometers*particular.cost_kilometer | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Precio por Carga:</b> </td>
                    <td>$@{{ precioCarga()| number:2}}</td>
                    <td> {!! Form::select('carga',['0'=>'0%','25' => '25%', '50' => '50%', '75' => '75%', '100' => '100%'], null, ['class' => 'form-control','ng-model'=>'carga']) !!}</td>
                    <td>$@{{(carga*precioCarga())/100 | number:2}}</td>
                </tr>
                 <tr>
                    <td><b>Horas de Maniobras: </b></td>
                    <td>{!! Form::input('text','maneuver_price', null, ['class' => 'form-control','ng-model'=>'particular.maneuvers','readonly']) !!}</td>
                    <td>{!! Form::input('number','hours_maneuver', null, ['class' => 'form-control','ng-model'=>'hours_maneuver','step'=>'.1','id'=>'hours_maneuver']) !!}</td>
                    <td>$@{{hours_maneuver*particular.maneuvers | number:2}}</td>
                </tr>
                 <tr>
                    <td><b>Otros</b></td>
                     <td>{!! Form::input('text','concepto_otros', null, ['class' => 'form-control','placeholder'=>'Concepto del cargo']) !!}</td>
                    <td>{!! Form::input('number','otros', null, ['class' => 'form-control','ng-model'=>'otros','step'=>'.1']) !!}</td>
                    <td>$@{{otros| number:2}}</td>
                    
                </tr>
                <tr>
                    <td><b>Servicio Nocturno (15%): </b></td>
                    <td></td>
                    <td>{!! Form::select('servicio_nocturno', ['no' => "NO",'si' => "SI"], null, ['class' => 'form-control','ng-model'=>'servicio_nocturno']) !!}</td>
                    <td ng-if="servicio_nocturno=='si'">$@{{subtotal()*.15 | number:2}}</td>
                    <td ng-if="servicio_nocturno=='no'">$0.00</td>
                    
                </tr>
                <tr>
                    <td><b>Sub total: </b></td>
                    <td></td>
                    <td></td>
                    <td>@{{subtotal() | number:2}}<input type="hidden" name="sub_total" value="@{{subtotal()}}"></td>
                </tr>
                <tr>
                    <td><b>I.V.A. : </b></td>
                    <td></td>
                    <td>{!! Form::select('iva',['.16' => "16%", '.12' => "12%",'0'=>'No'], null, ['class' => 'form-control','ng-model'=>'iva']) !!}</td>
                    <td>$@{{subtotal()*iva | number:2}} </td>
                    
                </tr>
                <tr style="background:#B90E13;color:#ffffff">
                    <td><b>Total:</b> </td>
                    <td></td>
                    <td></td>
                    <td>$@{{totalService() | number:2}} <input type="hidden" name="total" value="@{{totalService()}}"></td>
                </tr>
            </tbody>
        </table>  
    </div>
    <div class="form-group col-sm-12 col-lg-12 col-lg-offset-2">
    </div>

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
    {!! Form::label('operator_assigned', 'Operador Asignado:*') !!}
    {!! Form::select('operator_assigned',$operators,null,  ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12 col-lg-12">
  <h3>Tiempos</h3>
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('payment_method', 'Metodo de pago:') !!}
    {!! Form::select('payment_method',['Efectivo' => 'Efectivo', 'Tarjeta de débito' => 'Tarjeta de débito', 'Tarjeta de Crédito' => 'Tarjeta de Crédito', 'Transferencia bancaria' => 'Transferencia bancaria', 'Cheque' => 'Cheque','Credito' => 'Credito'], null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estatus', 'Estatus:*') !!}
    {!! Form::select('estatus', ['Cotizacion' => 'Cotizacion'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 col-lg-8">
    {!! Form::label('nota', 'Detalles del servicios:') !!}
    {!! Form::textArea('nota', null, ['class' => 'form-control','placeholder'=>'Puedes agregar cualquier nota referente al servicio  que no este contenplado en el formulario.']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
    <a class="btn btn-primary" href="{{ URL::previous() }}"> Regresar</a>
</div>
