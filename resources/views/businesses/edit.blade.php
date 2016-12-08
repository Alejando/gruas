@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($business, ['route' => ['businesses.update', $business->id], 'method' => 'patch']) !!}

        @include('businesses.fields')

    {!! Form::close() !!}
</div>
@endsection
