<!--- Name Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Operador</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', 'Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Number License Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('number_license', 'Número de Licencia:') !!}
    {!! Form::text('number_license', null, ['class' => 'form-control']) !!}
</div>
<!--- Number License Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('expires_license', 'Vencimiento de Licencia:') !!}
   
    {!! Form::input('date','expires_license', null, ['class' => 'form-control','type'=>'date','placeholder'=>'AAAA/MM/DD']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
