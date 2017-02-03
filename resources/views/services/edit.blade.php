
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
   var directionsDisplay = new google.maps.DirectionsRenderer({
      draggable: true,
      map: map
    });
  var geocoder = new google.maps.Geocoder();
  var map = new google.maps.Map(document.getElementById('mapaOrigen'), {
    zoom: 14,
    center:{lat:20.666111111111,lng:-103.351944}
     
  });
  directionsDisplay.setMap(map);

  // var onChangeHandler = function() {
    if($('#street_deliver').val().length>0){
         calculateAndDisplayRoute(directionsService, directionsDisplay);
    }else{
     
       geocodeAddress(geocoder, map);

    }
    
  // };
  // document.getElementById('start').addEventListener('change', onChangeHandler);
  // document.getElementById('end').addEventListener('change', onChangeHandler);
   directionsDisplay.addListener('directions_changed', function() {
    computeTotalDistance(directionsDisplay.getDirections());
  });
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
function computeTotalDistance(result) {
  var total = 0;
  var origen='';
  var destino='';
  var myroute = result.routes[0];
  for (var i = 0; i < myroute.legs.length; i++) {
    total += myroute.legs[i].distance.value;
    origen=myroute.legs[i].start_address;
    destino=myroute.legs[i].end_address;
  }
  total = total / 1000;
 // console.log(result.routes[0]);
   $('#distancia').val(total+' Km');
   var direccion=destino.split(',');
   var calle=direccion[0].split(' ');
   $('#street_deliver').val(direccion[0].replace(calle[calle.length-1],''));
   $('#number_deliver').val(calle[calle.length-1]);
   $('#colony_deliver').val(direccion[1]);
   $('#municipality_deliver').val(direccion[2]+' '+direccion[3]+' '+direccion[4]);
      direccion=origen.split(',');
      calle=direccion[0].split(' ');
   $('#street_is').val(direccion[0].replace(calle[calle.length-1],''));
   $('#number_is').val(calle[calle.length-1]);
   $('#colony').val(direccion[1]);
   $('#municipality').val(direccion[2]+' '+direccion[3]+' '+direccion[4]);
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