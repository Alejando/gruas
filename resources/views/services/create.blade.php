@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'services.store']) !!}

        @include('services.fieldParticular')

    {!! Form::close() !!}
</div>
@endsection
