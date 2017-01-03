<!--- Name Brand Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Marca</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_brand', 'Marca de vehiculo:') !!}
    {!! Form::text('name_brand', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
