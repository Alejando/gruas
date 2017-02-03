@extends('layouts.app')
 
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/style_form.css')}}"/> 
<style type="text/css" media="screen">
.onoffswitch {
    position: relative; width: 118px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 20px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "Reporte";
    padding-left: 10px;
    background-color: #34A7C1; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "Cotización";
    padding-right: 10px;
    background-color: #069937; color: #FCFFFD;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 18px; margin: 6px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 84px;
    border: 2px solid #999999; border-radius: 20px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}
</style>
<div ng-app="serviceApp">
    <div class="container" ng-controller="serviceController">
        @include('common.errors')

        {!! Form::open(['route' => 'services.store','id'=>'form']) !!}
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
              @include('services.fieldAssistanceCotizacion')
            @elseif($typeService==9)
             @include('services.fieldMovilityCotizacion')
            @elseif($typeService==10)
              @include('services.fieldPoliceCotizacion')
            @elseif($typeService==11)
              @include('services.fieldBusinessCotizacion')
            @elseif($typeService==12)
              @include('services.fieldIndustryCotizacion')
            @endif
        {!! Form::close() !!}
    </div>
</div>
@endsection
 {{-- src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd9yol_vWSB-7tHKOcxKHOLBec7B_XkGA&callback=initMap" --}}
@section('js')

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyBj742mD9_8YQB4jORsWq-ZLCnxuk4iEiw&callback=initMap"
        
        async defer>
    </script>
 <script type="text/javascript">
    var reporte=true;
      $(document).ready(function(){
       
        $('#tipoReport').click(function() {
            if(reporte){
                $('.cotizacion').removeAttr('required');
                $('#estatus').empty();
                $('#estatus').append($('<option>', {
                    value: 'Cotizacion',
                    text: 'Cotizacion'
                }));
                 reporte=false;
            }else{
                $('.cotizacion').attr('required',true);
                if($('#operator_assigned').val()!="Ninguno" && $('#unit_assigned').val()!="Ninguno"){
                $('#estatus').empty();
                  $('#estatus').append($('<option>', {
                      value: 'Asignado',
                      text: 'Asignado'
                  }));
                }else{
                   $('#estatus').empty();
                      $('#estatus').append($('<option>', {
                        value: 'Sin Asignar',
                        text: 'Sin Asignar'
                      }));
                }
                 reporte=true;
            }
         
        });
        $('#btnCotizacion').click(function() {
            alert(reporte);
        });
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
  //  calculateAndDisplayRoute(directionsService, directionsDisplay);
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

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: $('#street_is').val()+' '+$('#number_is').val()+' '+$('#colony').val()+' '+$('#municipality').val(),
    destination: $('#street_deliver').val()+' '+$('#number_deliver').val()+' '+$('#colony_deliver').val()+' '+$('#municipality_deliver').val(),
    travelMode: google.maps.TravelMode.DRIVING,
  avoidTolls: true
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      $('#distancia').val(response.routes[0].legs[0].distance.text);
      directionsDisplay.setDirections(response);
      
    } else {
      window.alert('Una de las direcciones no existe :(' + status);
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
