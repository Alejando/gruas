@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'units.store']) !!}

        @include('units.fields')

    {!! Form::close() !!}
</div>
@endsection
