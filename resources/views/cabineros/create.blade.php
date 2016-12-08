@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'cabineros.store']) !!}

        @include('cabineros.fields')

    {!! Form::close() !!}
</div>
@endsection
