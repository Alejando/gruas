<!--- Alias Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Particular</h3>
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

<!--- Z1 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z1', 'Costo Z1:') !!}
    {!! Form::input('number','z1', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Z2 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z2', 'Costo Z2:') !!}
    {!! Form::input('number','z2', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Z3 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z3', 'Costo Z3:') !!}
    {!! Form::input('number','z3', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Z4 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z4', 'Costo Z4:') !!}
    {!! Form::input('number','z4', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Z5 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('z5', 'Costo Z5:') !!}
    {!! Form::input('number','z5', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::input('number','cost_kilometer', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Maneuvers Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers', 'Costo de Maniobra por Hora:') !!}
    {!! Form::input('number','maneuvers', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Wait Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_hour', 'Costo de espera por Hora:') !!}
    {!! Form::input('number','wait_hour', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Dolly Use Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_use', 'Costo de uso de Dolly:') !!}
    {!! Form::input('number','dolly_use', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
