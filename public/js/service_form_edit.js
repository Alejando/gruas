var subMarcas;
$(document).ready(function() {

  $("#form").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
    $('#name_requests').click(function() {
         window.onbeforeunload = function(e) {
          return true;
        };
    });
    $('#form').submit(function() {
         window.onbeforeunload = function(e) {
          return null;
        };
    });
  

});
 document.getElementById('brand').addEventListener('change', function() {
    $('#subbrand').empty();
      $.ajax({
        type: "GET",
        url:'../../subbrands_ajax/'+$('#brand').val(),
        success: llegada,
      });
    function llegada(data){
      subMarcas=data;
    //  console.log(data);
        $.each(data, function(i,p) {
            $('#subbrand').append($('<option>', {
            value: p.name_sub_brand,
            text: p.name_sub_brand
             }));
          //console.log(p.pivot.precio);
        });
    $('#labelTipo').html("Tipo:*      <b style='color:gray;'>(Sugerido : "+data[0].tipo+").</b>");
      
    }
  });

 document.getElementById('subbrand').addEventListener('change', function() {
       $.each(subMarcas, function(i,p) {
          if(p.name_sub_brand==$('#subbrand').val()){
            $('#labelTipo').html("Tipo:*      <b style='color:gray;'>(Sugerido : "+p.tipo+").</b>");
          }
      });
  });

$("#unit_assigned").change(function(){
     
      if($('#operator_assigned').val()!="Ninguno" && $('#unit_assigned').val()!="Ninguno" && reporte){
        $('#estatus').empty();
        
        $('#estatus').append($('<option>', {
            value: 'Asignado',
            text: 'Asignado'
        }));
      }else{
         $('#estatus').empty();
        if(!reporte){
            $('#estatus').append($('<option>', {
                value: 'Cotizacion',
                text: 'Cotizacion'
            }));
        }else{
            $('#estatus').append($('<option>', {
              value: 'Sin Asignar',
              text: 'Sin Asignar'
            }));
        }
      }
});
$("#operator_assigned").change(function(){
   // console.log('hola')
      if($('#operator_assigned').val()!="Ninguno" && $('#unit_assigned').val()!="Ninguno" && reporte){
          $('#estatus').empty();
          $('#estatus').append($('<option>', {
            value: 'Asignado',
            text: 'Asignado'
          }));
      }else{
        $('#estatus').empty();
          if(!reporte){
              $('#estatus').append($('<option>', {
                  value: 'Cotizacion',
                  text: 'Cotizacion'
              }));
          }else{
              $('#estatus').append($('<option>', {
                value: 'Sin Asignar',
                text: 'Sin Asignar'
              }));
          }
      }
});



var app= angular.module('serviceApp',[]);
    app.controller('serviceController',['$scope','$http','$q',function($scope,$http,$q){

      $scope.tipoServicio=$('#tipoServicio').val();
      $scope.particular={};
      $scope.tipoZona=$('#tipoZona').val();
      $scope.carga=$('#carga').val();
      $scope.extra_kilometers=parseFloat($('#extra_kilometers').val());
      $scope.hours_maneuver=parseFloat($('#hours_maneuver').val());
      $scope.hours_wait=parseFloat($('#hours_wait').val());
      $scope.use_dolly=$('#use_dolly').val();
      $scope.iva=$('#iva').val();
      $scope.total=0;
      $scope.precioBase=parseFloat($('#precioBase').val());
      $scope.hora_acondicionamiento=parseFloat($('#hora_acondicionamiento').val());
      $scope.abanderamiento_hours=parseFloat($('#abanderamiento_hours').val());
      $scope.custody_hours=parseFloat($('#custody_hours').val());
      $scope.pension_hours=parseFloat($('#pension_hours').val());    
      $scope.tipoDato=$('#type').val();
      $scope.otros=parseFloat($('#otros').val());
      $scope.servicio_nocturno=$('#servicio_nocturno').val();
      $scope.zonaEditar=parseFloat($('#precioBase').val());

       $scope.subtotal = function(){
       $scope.total=parseFloat(0);
        $scope.total+=parseFloat($scope.zone());
        $scope.total+=(parseFloat($scope.particular.cost_kilometer)*parseFloat($scope.extra_kilometers));
        $scope.total+=parseFloat(($scope.carga)*parseFloat($scope.precioCarga())/100);
        $scope.total+=parseFloat($scope.otros);
        $scope.total+=(parseFloat($scope.particular.maneuvers)*parseFloat($scope.hours_maneuver));
        
        if($scope.tipoServicio=="Movilidad"){
            $scope.total+=(parseFloat($scope.particular.conditioning_hour)*parseFloat($scope.hora_acondicionamiento));
        }
        if($scope.tipoServicio=="Asistencia"){
            $scope.total+=(parseFloat($scope.particular.flag)*parseFloat($scope.abanderamiento_hours));
        }
        if($scope.tipoServicio=="Policia"){
           $scope.total+=(parseFloat($scope.particular.flag_hour)*parseFloat($scope.abanderamiento_hours));
           $scope.total+=(parseFloat($scope.particular.pension)*parseFloat($scope.pension_hours));
           $scope.total+=(parseFloat($scope.particular.custody_hour)*parseFloat($scope.custody_hours));
        }else{
          if($scope.tipoServicio!="Industrial"){
            $scope.total+=(parseFloat($scope.particular.wait_hour)*parseFloat($scope.hours_wait));
          }
        }
        if($scope.use_dolly=='si'){
          $scope.total+=parseFloat($scope.particular.dolly_use);
        }
        if($scope.servicio_nocturno=="si"){
           $scope.total=parseFloat($scope.total*1.15);
        }
          return $scope.total;
        
        
      }
      $scope.totalService = function(){
               return $scope.total*(1+parseFloat($scope.iva)); //Agregar IVA
      };
     $scope.precioCarga= function(){
        return parseFloat($scope.zone())+(parseFloat($scope.particular.cost_kilometer)*parseFloat($scope.extra_kilometers));
      };
      $scope.tipo= function(){
        var $def=$q.defer();switch($scope.tipoServicio){ //obtener los diferentes datos de los servicios

            case 'Particular':
                    if($scope.tipoDato==''){
                      $http.get("../../datosParticular/1").then(function(data){
                          angular.forEach(data.data, function(value, key) {
                            data.data[key]=0;
                          });
                        $scope.particular=data.data;
                      });
                    }else{
                      $http.get("../../datosParticular/"+$scope.tipoDato).then(function(data){
                        $scope.particular=data.data;
                        // console.log($scope.particular);
                         $def.resolve();
                      });
                    }
                break; 
            case 'Movilidad':
                    if($scope.tipoDato==''){
                      $http.get("../../datosMovility/1").then(function(data){
                          angular.forEach(data.data, function(value, key) {
                            data.data[key]=0;
                          });
                        $scope.particular=data.data;
                      });
                    }else{
                      $http.get("../../datosMovility/"+$scope.tipoDato).then(function(data){
                        $scope.particular=data.data;
                        // console.log($scope.particular);
                         $def.resolve();
                      });
                    }
                break;
            case 'Asistencia':
                    if($scope.tipoDato=='' || $scope.tipoDato==null ){
                      $http.get("../../datosAssistance/1").then(function(data){
                          angular.forEach(data.data, function(value, key) {
                            data.data[key]=0;
                          });
                        $scope.particular=data.data;
                      });
                    }else{
                      $http.get("../../datosAssistance/"+$scope.tipoDato).then(function(data){
                        $scope.particular=data.data;
                        // console.log($scope.particular);
                         $def.resolve();
                      });
                    }
                break;
             case 'Policia':
                    if($scope.tipoDato==''){
                      $http.get("../../datosPolice/1").then(function(data){
                          angular.forEach(data.data, function(value, key) {
                            data.data[key]=0;
                          });
                        $scope.particular=data.data;
                      });
                    }else{
                      $http.get("../../datosPolice/"+$scope.tipoDato).then(function(data){
                        $scope.particular=data.data;
                        // console.log($scope.particular);
                         $def.resolve();
                      });
                    }
                break;
             case 'Empresa':
                    if($scope.tipoDato==''){
                      $http.get("../../datosBusinessdatosIndustry/1").then(function(data){
                          angular.forEach(data.data, function(value, key) {
                            data.data[key]=0;
                          });
                        $scope.particular=data.data;
                      });
                    }else{
                      $http.get("../../datosBusinessdatosIndustry/"+$scope.tipoDato).then(function(data){
                        $scope.particular=data.data;
                        // console.log($scope.particular);
                         $def.resolve();
                      });
                    }
                break;
               case 'Industrial':
                      if($scope.tipoDato==''){
                      $http.get("../../datosIndustry/1").then(function(data){
                          angular.forEach(data.data, function(value, key) {
                            data.data[key]=0;
                          });
                        $scope.particular=data.data;
                      });
                    }else{
                      $http.get("../../datosIndustry/"+$scope.tipoDato).then(function(data){
                        $scope.particular=data.data;
                        // console.log($scope.particular);
                         $def.resolve();
                      });
                    }
                break;
        }
       
        return $def.promise;    
      }
     
      $scope.zone= function(){
          switch($scope.tipoZona){
                case 'z1':
                  $scope.precioBase=$scope.particular.z1;
                    break;
                case 'z2':
                  $scope.precioBase= $scope.particular.z2;
                    break;
                case 'z3':
                  $scope.precioBase= $scope.particular.z3;
                    break;
                case 'z4':
                  $scope.precioBase= $scope.particular.z4;
                    break;
                case 'z5':
                  $scope.precioBase= $scope.particular.z5;
                    break;
                case 'sl':
                  $scope.precioBase= $scope.particular.local_service;
                    break;
                case 'vs':
                  $scope.precioBase= $scope.particular.single_return;
                    break;
                case 'tg':
                  $scope.precioBase= $scope.particular.tlajomulco_to_GDL;
                    break;
                case 'dfg':
                  $scope.precioBase= $scope.particular.deposit_outside_GDL;
                    break;
                case 'dp':
                  $scope.precioBase= $scope.particular.inside_of_periferico;
                    break;
                case 'ba':
                  $scope.precioBase= $scope.particular.banderazo;
                    break;
                case 'sz':
                  $scope.precioBase= $scope.zonaEditar;
                    break;
                default:
                  $scope.precioBase= 0;
                    break;
          }
         return $scope.precioBase;
      }

      $scope.tipo().then(function  () {
          // console.log('algo');
          $scope.subtotal();
      },function  () {
        // console.log('Algo salio mal :(');
      });
      



    }]);