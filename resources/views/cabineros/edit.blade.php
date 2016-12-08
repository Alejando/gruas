@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($cabinero, ['route' => ['cabineros.update', $cabinero->id], 'method' => 'patch']) !!}

        @include('cabineros.fields')

    {!! Form::close() !!}
</div>
@endsection
