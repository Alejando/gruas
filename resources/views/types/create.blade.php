@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'types.store']) !!}

        @include('types.fields')

    {!! Form::close() !!}
</div>
@endsection
