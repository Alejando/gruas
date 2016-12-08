<!--- Name Sub Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_sub_brand', 'Nombre de sub Marca del vehiculo:') !!}
    {!! Form::text('name_sub_brand', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('brand_id', 'Marca a la que pertenece el modelo del vehiculo:') !!}
    {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
