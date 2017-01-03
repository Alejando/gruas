<!--- Type Field --->
<div class="form-group col-sm-12 col-lg-12">
    <h3 style="color: #8B080B;">Movilidad</h3>
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

<!--- Local Service Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local_service', 'Costo de Servicio Local:') !!}
    {!! Form::input('number','local_service', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Single Return Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('single_return', 'Costo de Vuelta Sencilla:') !!}
    {!! Form::input('number','single_return', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Dolly Use Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_use', 'Costo de uso de Dolly:') !!}
    {!! Form::input('number','dolly_use', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Wait Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_hour', 'Costo de Espera por Hora:') !!}
    {!! Form::input('number','wait_hour', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Maneuvers Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers', 'Costo de Maniobra por Hora:') !!}
    {!! Form::input('number','maneuvers', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Tlajomulco To Gdl Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tlajomulco_to_GDL', 'Costo de Tlajomulco a Guadalajara:') !!}
    {!! Form::input('number','tlajomulco_to_GDL', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::input('number','cost_kilometer', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Deposit Outside Gdl Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('deposit_outside_GDL', 'Costo de Depósito fuera de Guadalajara:') !!}
    {!! Form::input('number','deposit_outside_GDL', null, ['class' => 'form-control','step'=>'.01']) !!}
</div>

<!--- Conditioning Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('conditioning_hour', 'Costo de Acondicionamiento por Hora:') !!}
    {!! Form::input('number','conditioning_hour', null, ['class' => 'form-control','type'=>'number','step'=>'.01']) !!}

</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
