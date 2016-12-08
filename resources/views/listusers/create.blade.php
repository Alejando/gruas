@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'listusers.store']) !!}

        @include('listusers.fields')

    {!! Form::close() !!}
</div>
@endsection
