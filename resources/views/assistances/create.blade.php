@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'assistances.store']) !!}

        @include('assistances.fields')

    {!! Form::close() !!}
</div>
@endsection
