@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'operators.store']) !!}

        @include('operators.fields')

    {!! Form::close() !!}
</div>
@endsection
