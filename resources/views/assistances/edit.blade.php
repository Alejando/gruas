@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($assistance, ['route' => ['assistances.update', $assistance->id], 'method' => 'patch']) !!}

        @include('assistances.fields')

    {!! Form::close() !!}
</div>
@endsection
