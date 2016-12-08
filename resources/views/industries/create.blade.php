@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'industries.store']) !!}

        @include('industries.fields')

    {!! Form::close() !!}
</div>
@endsection
