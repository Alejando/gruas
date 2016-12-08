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

<!--- Local Service Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local_service', 'Costo de Servicio Local:') !!}
    {!! Form::text('local_service', null, ['class' => 'form-control']) !!}
</div>

<!--- Single Return Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('single_return', 'Costo de Vuelta Sencilla:') !!}
    {!! Form::text('single_return', null, ['class' => 'form-control']) !!}
</div>

<!--- Dolly Use Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dolly_use', 'Costo de uso de Dolly:') !!}
    {!! Form::text('dolly_use', null, ['class' => 'form-control']) !!}
</div>

<!--- Wait Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('wait_hour', 'Costo de Espera por Hora:') !!}
    {!! Form::text('wait_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Maneuvers Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('maneuvers_hour', 'Costo de Maniobra por Hora:') !!}
    {!! Form::text('maneuvers_hour', null, ['class' => 'form-control']) !!}
</div>

<!--- Tlajomulco To Gdl Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tlajomulco_to_GDL', 'Costo de Tlajomulco a Guadalajara:') !!}
    {!! Form::text('tlajomulco_to_GDL', null, ['class' => 'form-control']) !!}
</div>

<!--- Cost Kilometer Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cost_kilometer', 'Costo por Kilometro:') !!}
    {!! Form::text('cost_kilometer', null, ['class' => 'form-control']) !!}
</div>

<!--- Deposit Outside Gdl Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('deposit_outside_GDL', 'Costo de Depósito fuera de Guadalajara:') !!}
    {!! Form::text('deposit_outside_GDL', null, ['class' => 'form-control']) !!}
</div>

<!--- Conditioning Hour Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('conditioning_hour', 'Costo de Acondicionamiento por Hora:') !!}
    {!! Form::text('conditioning_hour', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn my-btn']) !!}
</div>
