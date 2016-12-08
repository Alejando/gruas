<!--- Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!--- Description Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!--- Z1 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z1', 'Costo Z1:') !!}
    {!! Form::text('z1', null, ['class' => 'form-control']) !!}
</div>

<!--- Z2 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z2', 'Costo Z2:') !!}
    {!! Form::text('z2', null, ['class' => 'form-control']) !!}
</div>

<!--- Z3 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z3', 'Costo Z3:') !!}
    {!! Form::text('z3', null, ['class' => 'form-control']) !!}
</div>

<!--- Z4 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z4', 'Costo Z4:') !!}
    {!! Form::text('z4', null, ['class' => 'form-control']) !!}
</div>

<!--- Z5 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z5', 'Costo Z5:') !!}
    {!! Form::text('z5', null, ['class' => 'form-control']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::text('cost_kilometer', null, ['class' => 'form-control']) !!}
</div>

<!--- Maneuvers Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers_hour', 'Costo de Maniobra por Hora:') !!}
    {!! Form::text('maneuvers_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Wait Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_hour', 'Costo de Espera por Hora:') !!}
    {!! Form::text('wait_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Dolly Use Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_use', 'Costo de uso de Dolly:') !!}
    {!! Form::text('dolly_use', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
