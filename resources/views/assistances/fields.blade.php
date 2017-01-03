<!--- Alias Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Asistencia</h3>
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!--- Type Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!--- Inside of Periferico Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('inside_of_periferico', 'Costo dentro de Periferico:') !!}
    {!! Form::input('number','inside_of_periferico', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::input('number','cost_kilometer', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Maneuvers Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers', 'Costo por Maniobra:') !!}
    {!! Form::input('number','maneuvers', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Wait Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_hour', 'Costo de Espera por Hora:') !!}
    {!! Form::input('number','wait_hour', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Dolly Use Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_use', 'Costo por uso de Dolly:') !!}
    {!! Form::input('number','dolly_use', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Flag Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('flag', 'Costo por Abanderamiento:') !!}
    {!! Form::input('number','flag', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Pension Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('pension', 'Costo de Pension por día:') !!}
    {!! Form::input('number','pension', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Conditioning Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('conditioning', 'Costo de Acondicionamiento por hora:') !!}
    {!! Form::input('number','conditioning', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
