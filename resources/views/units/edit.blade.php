@extends('layouts.app')

@section('content')
<?php 
	$brands = App\Models\Brand::lists('name_brand', 'name_brand');
	$subbrands = App\Models\Subbrand::lists('name_sub_brand', 'name_sub_brand');
	$models = App\Models\Vehiclemodel::lists('model_year', 'model_year');
 ?>
<div class="container">

    @include('common.errors')

    {!! Form::model($unit, ['route' => ['units.update', $unit->id], 'method' => 'patch']) !!}

        @include('units.fields')

    {!! Form::close() !!}
</div>
@endsection
