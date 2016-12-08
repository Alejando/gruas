@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($industry, ['route' => ['industries.update', $industry->id], 'method' => 'patch']) !!}

        @include('industries.fields')

    {!! Form::close() !!}
</div>
@endsection
