@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'businesses.store']) !!}

        @include('businesses.fields')

    {!! Form::close() !!}
</div>
@endsection
