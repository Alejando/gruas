@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'police.store']) !!}

        @include('police.fields')

    {!! Form::close() !!}
</div>
@endsection
