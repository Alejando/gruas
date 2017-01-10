<!--- Name Brand Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Empresa</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre de la empresa:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
