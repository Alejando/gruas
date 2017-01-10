@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($empresa, ['route' => ['empresas.update', $empresa->id], 'method' => 'patch']) !!}

        @include('empresas.fields')

    {!! Form::close() !!}
</div>
@endsection
