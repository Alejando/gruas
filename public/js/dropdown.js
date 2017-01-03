
 document.getElementById('brand').addEventListener('change', function() {
    $('#subbrand').empty();
      $.ajax({
        type: "GET",
        url:'../../subbrands_ajax/'+$('#brand').val(),
        success: llegada,
      });
    function llegada(data){
    //  console.log(data);
        $.each(data, function(i,p) {
            $('#subbrand').append($('<option>', {
            value: p.name_sub_brand,
            text: p.name_sub_brand
             }));
          //console.log(p.pivot.precio);
        });
      
    }
  });



    
