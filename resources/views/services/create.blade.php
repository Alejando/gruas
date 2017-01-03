@extends('layouts.app')
 
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/style_form.css')}}"/> 
<div ng-app="serviceApp">
    <div class="container" ng-controller="serviceController">
        @include('common.errors')

        {!! Form::open(['route' => 'services.store']) !!}
        	@if($typeService==1)
            	@include('services.fieldParticular')
            @elseif($typeService==2)
            	@include('services.fieldAssistance')
            @elseif($typeService==3)
            	@include('services.fieldMovility')
            @elseif($typeService==4)
            	@include('services.fieldPolice')
            @elseif($typeService==5)
            	@include('services.fieldBusiness')
            @elseif($typeService==6)
            	@include('services.fieldIndustry')
            @elseif($typeService==7)
              @include('services.fieldParticularCotizacion')
            @elseif($typeService==8)
              {{-- @include('services.fieldIndustry') --}}
            @elseif($typeService==9)
             @include('services.fieldMovilityCotizacion')
            @elseif($typeService==10)
              {{-- @include('services.fieldIndustry') --}}
            @endif
        {!! Form::close() !!}
    </div>
</div>
@endsection
 {{-- src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd9yol_vWSB-7tHKOcxKHOLBec7B_XkGA&callback=initMap" --}}
@section('js')
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj742mD9_8YQB4jORsWq-ZLCnxuk4iEiw&callback=initMap"
        
        async defer>
    </script>

 <script type="text/javascript">
   
    $(document).ready(function(){
        $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
    });
   function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var geocoder = new google.maps.Geocoder();
  var map = new google.maps.Map(document.getElementById('mapaOrigen'), {
    zoom: 14,
    center:{lat:20.666111111111,lng:-103.351944}
     
  });
  directionsDisplay.setMap(map);

  // var onChangeHandler = function() {
  //  calculateAndDisplayRoute(directionsService, directionsDisplay);
  // };
  // document.getElementById('start').addEventListener('change', onChangeHandler);
  // document.getElementById('end').addEventListener('change', onChangeHandler);

  document.getElementById('updateRute').addEventListener('click', function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  });
  document.getElementById('marcarPunto').addEventListener('click', function() {
     geocodeAddress(geocoder, map);
  });
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: $('#street_is').val()+' '+$('#number_is').val()+' '+$('#colony').val()+' '+$('#municipality').val(),
    destination: $('#street_deliver').val()+' '+$('#number_deliver').val()+' '+$('#colony_deliver').val()+' '+$('#municipality_deliver').val(),
    travelMode: google.maps.TravelMode.DRIVING

  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      $('#distancia').val(response.routes[0].legs[0].distance.text);
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Una de las direcciones no existe :(' + status);
    }
  });
}
function geocodeAddress(geocoder, resultsMap) {
  var address = $('#street_is').val()+' '+$('#number_is').val()+' '+$('#colony').val()+' '+$('#municipality').val();
  geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      resultsMap.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
      });
    } else {
      alert('No existe la dirección' + status);
    }
  });
}
$(document).ready(function() {
  $('.date-picker').daterangepicker({ singleDatePicker: true, timePicker: true,
    timePickerIncrement: 1,
    format: 'YYYY/MM/DD/ HH:mm:ss' }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});

  </script>
  <script type="text/javascript" src="{{ asset('/js/service_form.js')}}"></script>
@endsection
