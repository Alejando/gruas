<!--- Name Requests Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_requests', 'Nombre quien reporta:') !!}
    {!! Form::text('name_requests', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Requests Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone_requests', 'Teléfono quien reporta:') !!}
    {!! Form::text('phone_requests', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Wait Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_wait', 'Nombre quien esta en vehículo:') !!}
    {!! Form::text('name_wait', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Wait Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone_wait', 'Teléfono quien esta en vehículo:') !!}
    {!! Form::text('phone_wait', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Request Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email_request', 'Email:') !!}
    {!! Form::text('email_request', null, ['class' => 'form-control']) !!}
</div>
