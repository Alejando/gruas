@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($police, ['route' => ['police.update', $police->id], 'method' => 'patch']) !!}

        @include('police.fields')

    {!! Form::close() !!}
</div>
@endsection
