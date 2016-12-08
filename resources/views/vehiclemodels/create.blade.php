@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'vehiclemodels.store']) !!}

        @include('vehiclemodels.fields')

    {!! Form::close() !!}
</div>
@endsection
