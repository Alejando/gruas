<!--- Alias Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('alias', 'Tipo:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!--- Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Descripción:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!--- Inside of Periferico Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('inside_of_periferico', 'Costo dentro de Periferico:') !!}
    {!! Form::text('inside_of_periferico', null, ['class' => 'form-control']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::text('cost_kilometer', null, ['class' => 'form-control']) !!}
</div>

<!--- Maneuvers Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers', 'Costo por Maniobra:') !!}
    {!! Form::text('maneuvers', null, ['class' => 'form-control']) !!}
</div>

<!--- Wait Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_hour', 'Costo de Espera por Hora:') !!}
    {!! Form::text('wait_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Dolly Use Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_use', 'Costo por uso de Dolly:') !!}
    {!! Form::text('dolly_use', null, ['class' => 'form-control']) !!}
</div>

<!--- Flag Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('flag', 'Costo por Abanderamiento:') !!}
    {!! Form::text('flag', null, ['class' => 'form-control']) !!}
</div>

<!--- Pension Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('pension', 'Costo de Pension por día:') !!}
    {!! Form::text('pension', null, ['class' => 'form-control']) !!}
</div>

<!--- Conditioning Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('conditioning', 'Costo de Acondicionamiento por hora:') !!}
    {!! Form::text('conditioning', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
