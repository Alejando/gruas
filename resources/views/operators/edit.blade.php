@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($operator, ['route' => ['operators.update', $operator->id], 'method' => 'patch']) !!}

        @include('operators.fields')

    {!! Form::close() !!}
</div>
@endsection
