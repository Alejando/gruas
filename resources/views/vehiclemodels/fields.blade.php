<!--- Model Year Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('model_year', 'Modelo (Año):') !!}
    {!! Form::text('model_year', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
