<!--- Type Unit Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Unidad</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo de Unidad:') !!}
    {!! Form::select('type',['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'DDD' => 'DDD'], null, ['class' => 'form-control']) !!}
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
    {!! Form::input('date','expiration_date', null, ['class' => 'form-control']) !!}
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
<!--- Description Unit Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción de Unidad:') !!}
    {!! Form::textArea('description', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
