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

<!--- Banderazo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('banderazo', 'Costo por Banderazo:') !!}
    {!! Form::text('banderazo', null, ['class' => 'form-control']) !!}
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

<!--- Custody Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('custody_hour', 'Costo de Custodia por Hora:') !!}
    {!! Form::text('custody_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Flag Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('flag_hour', 'Costo de Abanderamiento por Hora:') !!}
    {!! Form::text('flag_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Pension Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('pension', 'Costo de Pensión:') !!}
    {!! Form::text('pension', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
