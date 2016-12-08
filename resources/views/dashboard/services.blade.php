@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-1">
			<h2>Selecciona un tipo de Servicio para ver el catalogo de precios</h2>
		</div>
		<div class="col-md-12 col">
			<div class="col-md-4">
				<div class="form-group col-sm-12">
					<a class="btn my-btn" style="margin-top: 25px" href="{{ url('/particulars') }}">Particular</a>
				</div>
			</div>
			<div class="col-md-4">
				<a class="btn my-btn" style="margin-top: 25px" href="{{ url('/assistances') }}">Asistencia</a>
			</div>
			<div class="col-md-4">
				<a class="btn my-btn" style="margin-top: 25px" href="{{ url('/movilities') }}">Movilidad</a>
			</div>
		</div>
		<div class="col-md-12 col">
			<div class="col-md-4">
				<div class="form-group col-sm-12">
					<a class="btn my-btn" style="margin-top: 25px" href="{{ url('/police') }}">Policia</a>
				</div>
			</div>
			<div class="col-md-4">
				<a class="btn my-btn" style="margin-top: 25px" href="{{ url('/businesses') }}">Empresa</a>
			</div>
			<div class="col-md-4">
				<a class="btn my-btn" style="margin-top: 25px" href="{{ url('/industries')}}">Industrial</a>
			</div>
		</div>
	</div>
</div>
@endsection