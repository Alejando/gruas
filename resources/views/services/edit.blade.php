@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'patch']) !!}

        @include('services.fields')

    {!! Form::close() !!}
</div>
@endsection
