@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($subbrand, ['route' => ['subbrands.update', $subbrand->id], 'method' => 'patch']) !!}

        @include('subbrands.fields')

    {!! Form::close() !!}
</div>
@endsection
