@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'subbrands.store']) !!}

        @include('subbrands.fields')

    {!! Form::close() !!}
</div>
@endsection
