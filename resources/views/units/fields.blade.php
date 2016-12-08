<!--- Type Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo de Unidad:') !!}
    {!! Form::select('type',['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'DDD' => 'DDD'], null, ['class' => 'form-control']) !!}
</div>

<!--- Description Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción de Unidad:') !!}
    {!! Form::select('description',['Automóvil/Pick up' => 'Automóvil/Pick up', '3 Ton/Pick up diesel' => '3 Ton/Pick up diesel', '5 Ton/chatitos/minibus' => '5 Ton/chatitos/minibus', 'Camión rabon/midibus' => 'Camión rabon/midibus', 'Torton/tracto/midibus ch' => 'Torton/tracto/midibus ch', 'Trailes/bomba/recolector frontal' => 'Trailes/bomba/recolector frontal', 'Autobus irizar/volvo/scania/man' => 'Autobus irizar/volvo/scania/man'], null, ['class' => 'form-control']) !!}
</div>

<!--- Brand Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('brand', 'Marca de Unidad:') !!}
    {!! Form::select('brand', $brands, null, ['id'=>'Brand', 'class' => 'form-control']) !!}
</div>

<!--- Sub-brand Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sub_brand', 'Sub-marca de Unidad:') !!}
    {!! Form::select('sub_brand', $subbrands, null, ['id'=>'Subbrand', 'class' => 'form-control']) !!}
</div>

<!--- Model Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('model', 'Modelo de Unidad:') !!}
    {!! Form::select('model', $models, null, ['id'=>'Model', 'class' => 'form-control']) !!}
</div>

<!--- Expiration Date Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('expiration_date', 'Fecha de vencimiento de Unidad:') !!}
    <input type="date" name="expiration_date" class="form-control">
</div>

<!--- License Plate Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('license_plate', 'Placas:') !!}
    {!! Form::text('license_plate', null, ['class' => 'form-control']) !!}
</div>

<!--- Economic Number Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('economic_number', 'Número Económico:') !!}
    {!! Form::text('economic_number', null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
