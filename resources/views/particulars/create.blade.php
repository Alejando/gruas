@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'particulars.store']) !!}

        @include('particulars.fields')

    {!! Form::close() !!}
</div>
@endsection
