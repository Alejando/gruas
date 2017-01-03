<!--- Type Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Policia</h3>
</div>
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
    {!! Form::input('number','banderazo', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::input('number','cost_kilometer', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Maneuvers Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers_hour', 'Costo de Maniobra por Hora:') !!}
    {!! Form::input('number','maneuvers_hour', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Custody Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('custody_hour', 'Costo de Custodia por Hora:') !!}
    {!! Form::input('number','custody_hour', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Flag Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('flag_hour', 'Costo de Abanderamiento por Hora:') !!}
    {!! Form::input('number','flag_hour', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Pension Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('pension', 'Costo de Pensión:') !!}
    {!! Form::input('number','pension', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
