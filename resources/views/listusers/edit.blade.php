@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($listusers, ['route' => ['listusers.update', $listusers->id], 'method' => 'patch']) !!}

        @include('listusers.fields')

    {!! Form::close() !!}
</div>
@endsection
