@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($particular, ['route' => ['particulars.update', $particular->id], 'method' => 'patch']) !!}

        @include('particulars.fields')

    {!! Form::close() !!}
</div>
@endsection
