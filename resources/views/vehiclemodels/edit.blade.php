@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($vehiclemodel, ['route' => ['vehiclemodels.update', $vehiclemodel->id], 'method' => 'patch']) !!}

        @include('vehiclemodels.fields')

    {!! Form::close() !!}
</div>
@endsection
