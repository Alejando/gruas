<!--- Name Sub Brand Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Submarca</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_sub_brand', 'Nombre de sub Marca del vehículo:') !!}
    {!! Form::text('name_sub_brand', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('brand_id', 'Marca a la que pertenece el modelo del vehículo:') !!}
    {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
</div>
<!--- type Brand Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo', 'Tipo relacionado al vehiculo:') !!}
    {!! Form::select('tipo', ['A'=>'A','A1'=>'A1','A2'=>'A2','B'=>'B','C'=>'C','D'=>'D','DD'=>'DD','DDD'=>'DDD','DDD1'=>'DDD1'], null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
