<!--- Name Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Cabinero</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Last name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', 'Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Número Telefónico:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Schedule Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('schedule', 'Horario:') !!}
    {!! Form::select('schedule', ['Matutino' => 'Matutino', 'Vespertino' => 'Vespertino', '24 Horas'=> '24 Horas'], null, ['id'=>'status', 'class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Correo Electronico:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>



<!--- Password Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('password', 'Contraseña de acceso:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
