@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'movilities.store']) !!}

        @include('movilities.fields')

    {!! Form::close() !!}
</div>
@endsection
