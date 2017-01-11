
  @extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/style_form.css')}}"/> 
    </style>
<div ng-app="serviceApp">
    <div class="container" ng-controller="serviceController">

    @include('common.errors')

   {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'patch']) !!}
      @if($service->service_type=="Particular")
        @include('services.fieldParticularEdit')
      @elseif($service->service_type=="Asistencia")
         @include('services.fieldAssistanceEdit')
      @elseif($service->service_type=="Movilidad")
         @include('services.fieldMovilityEdit')
      @elseif($service->service_type=="Policia")
        @include('services.fieldPoliceEdit')
      @elseif($service->service_type=="Empresa")
         @include('services.fieldBusinessEdit')
      @elseif($service->service_type=="Industrial")
         @include('services.fieldIndustryEdit')
      @endif
    {!! Form::close() !!}
  </div>
</div>
@endsection
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
    if($('#street_deliver').empty()){
        geocodeAddress(geocoder, map);
    }else{
      
       calculateAndDisplayRoute(directionsService, directionsDisplay);
    }
    
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
$(document).ready(function() {
  $('.date-picker').daterangepicker({ singleDatePicker: true, timePicker: true,
    timePickerIncrement: 1,
    format: 'YYYY/MM/DD/ HH:mm:ss' }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
  
 
  </script>
  <script type="text/javascript" src="{{ asset('/js/service_form_edit.js')}}"></script>
@endsection