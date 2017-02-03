<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('report_number', 'Numero de inventario:') !!}
    {!! Form::text('report_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('empresa', 'Empresa:*') !!}
    {!! Form::select('empresa',$empresas,null, ['id'=>'empresa', 'class' => 'form-control','required' =>'true']) !!}
</div>
 <div class="form-group col-sm-12 col-lg-12">
  <h3>Datos cliente</h3>
   {!! Form::hidden('service_type', 'Policia', ['class' => 'form-control','id'=>'tipoServicio']) !!}
</div>
         
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_requests', 'Nombre quien solicita:*') !!}
    {!! Form::text('name_requests', null, ['class' => 'form-control','required' =>'true']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('patrol', 'Patrulla en sitio:*') !!}
    {!! Form::text('patrol', null, ['class' => 'form-control','required']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
  <h3>Datos del vehículo</h3>
</div>



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('vehicle_type', 'Tipo de vehículo:*') !!}
   {!! Form::select('vehicle_type', $vehicle_type, null, ['class' => 'form-control','required']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('brand', 'Marca:') !!}
    {!! Form::select('brand',$brands,null, ['id'=>'brand', 'class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sub_brand', 'Submarca:') !!}
    {!! Form::select('sub_brand',$subbrands,null, ['id'=>'subbrand', 'class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('model', 'Modelo:') !!}
    {!! Form::select('model',$models,null, ['id'=>'Model', 'class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('license_plate', 'Placas:') !!}
    {!! Form::text('license_plate', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('failure', 'Falla:') !!}
    {!! Form::text('failure', null, ['class' => 'form-control']) !!}
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
    {!! Form::text('between_streets', null, ['class' => 'form-control']) !!}
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
    {!! Form::select('zone',['ba'=>'Banderazo'],null, ['class' => 'form-control','id'=>'tipoZona','ng-change'=>'zone()','ng-model'=>'tipoZona']) !!}
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
                    <td><b>Banderazo</b>  </td>
                    <td>$@{{ zone() | number:2}}<input type="hidden" name="base_price" value="@{{zone()}}"></td>
                    <td></td>
                    <td>$@{{ zone() | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Km adicionales: </b></td>
                    <td>{!! Form::input('text','kilometer_extra_price', null, ['class' => 'form-control','ng-model'=>'particular.cost_kilometer','readonly']) !!}</td>
                    <td> {!! Form::input('number','extra_kilometers', null, ['class' => 'form-control','ng-model'=>'extra_kilometers','step'=>'.01','id'=>'extra_kilometers']) !!}</td>
                    <td>$@{{extra_kilometers*particular.cost_kilometer | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Precio por Carga:</b> </td>
                    <td>$@{{ precioCarga()| number:2}}</td>
                    <td> {!! Form::select('carga',['0'=>'0%','25' => '25%', '50' => '50%', '75' => '75%', '100' => '100%'], null, ['class' => 'form-control','ng-model'=>'carga','id'=>'carga']) !!}</td>
                    <td>$@{{(carga*precioCarga())/100 | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Horas de Maniobras: </b></td>
                    <td>{!! Form::input('text','maneuver_price', null, ['class' => 'form-control','ng-model'=>'particular.maneuvers','readonly']) !!}</td>
                    <td>{!! Form::input('number','hours_maneuver', null, ['class' => 'form-control','ng-model'=>'hours_maneuver','step'=>'.1','id'=>'hours_maneuver']) !!}</td>
                    <td>$@{{hours_maneuver*particular.maneuvers | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Horas de Custodia: </b></td>
                    <td>{!! Form::input('text','custody_price', null, ['class' => 'form-control','ng-model'=>'particular.custody_hour','readonly']) !!}</td>
                    <td> {!! Form::input('number','hours_custody', null, ['class' => 'form-control','ng-model'=>'custody_hours','step'=>'.1','id'=>'custody_hours']) !!}</td>
                    <td>$@{{custody_hours*particular.custody_hour | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Horas de Abanderamiento: </b></td>
                    <td>{!! Form::input('text','abanderamiento_price', null, ['class' => 'form-control','ng-model'=>'particular.flag_hour','readonly']) !!}</td>
                    <td> {!! Form::input('number','abanderamiento_hours', null, ['class' => 'form-control','ng-model'=>'abanderamiento_hours','step'=>'.1','id'=>'abanderamiento_hours']) !!}
                    </td>
                    <td>$@{{abanderamiento_hours*particular.flag_hour | number:2}}</td>
                </tr>
                <tr>
                    <td><b>Otros</b></td>
                    <td>{!! Form::input('text','concepto_otros', null, ['class' => 'form-control','placeholder'=>'Concepto del cargo']) !!}</td>
                    <td>{!! Form::input('number','otros', null, ['class' => 'form-control','ng-model'=>'otros','step'=>'.1','id'=>'otros']) !!}</td>
                    <td>$@{{otros| number:2}}</td>
                </tr>
                <tr>
                    <td><b>Servicio Nocturno (15%): </b></td>
                    <td></td>
                    <td>{!! Form::select('servicio_nocturno', ['no' => "NO",'si' => "SI"], null, ['class' => 'form-control','ng-model'=>'servicio_nocturno','id'=>'servicio_nocturno']) !!}</td>
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
                    <td>{!! Form::select('iva',['.16' => "16%", '.12' => "12%",'0'=>'No'], null, ['class' => 'form-control','ng-model'=>'iva','id'=>'iva']) !!}</td>
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
@include('services.blocks.asignacion')
