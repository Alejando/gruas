@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($type, ['route' => ['types.update', $type->id], 'method' => 'patch']) !!}

        @include('types.fields')

    {!! Form::close() !!}
</div>
@endsection
