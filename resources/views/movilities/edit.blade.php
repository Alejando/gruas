@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($movility, ['route' => ['movilities.update', $movility->id], 'method' => 'patch']) !!}

        @include('movilities.fields')

    {!! Form::close() !!}
</div>
@endsection
