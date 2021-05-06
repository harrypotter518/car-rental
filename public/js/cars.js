$(function () {
    var input_pick_up = document.getElementById('pick_up');

    var autocomplete_pick_up = new google.maps.places.Autocomplete(input_pick_up);



    var input_drop_off = document.getElementById('drop_off');

    var autocomplete_drop_off = new google.maps.places.Autocomplete(input_drop_off);



    });

      $(document).on('keyup','#pick_up',function(){



            var geocoder = new google.maps.Geocoder();



            var address = $(this).val();







            geocoder.geocode( { 'address': address}, function(results, status) {







              if (status == google.maps.GeocoderStatus.OK) {



                var latitude = results[0].geometry.location.lat();



                var longitude = results[0].geometry.location.lng();



                $('#pick_up_lat').val(latitude);



                $('#pick_up_lng').val(longitude);

              } 



            }); 



          })







          $(document).on('change','#pick_up',function(){



            var geocoder = new google.maps.Geocoder();



            var address = $(this).val();







            geocoder.geocode( { 'address': address}, function(results, status) {







              if (status == google.maps.GeocoderStatus.OK) {



                var latitude = results[0].geometry.location.lat();



                var longitude = results[0].geometry.location.lng();



                $('#pick_up_lat').val(latitude);



                $('#pick_up_lng').val(longitude);



              } 



            }); 



          })



          $(document).on('keyup','#drop_off',function(){



            var geocoder = new google.maps.Geocoder();



            var address = $(this).val();







            geocoder.geocode( { 'address': address}, function(results, status) {







              if (status == google.maps.GeocoderStatus.OK) {



                var latitude = results[0].geometry.location.lat();



                var longitude = results[0].geometry.location.lng();



                $('#drop_off_lat').val(latitude);



                $('#drop_off_lng').val(longitude);

              } 



            }); 



          })







          $(document).on('change','#drop_off',function(){



            var geocoder = new google.maps.Geocoder();



            var address = $(this).val();







            geocoder.geocode( { 'address': address}, function(results, status) {







              if (status == google.maps.GeocoderStatus.OK) {



                var latitude = results[0].geometry.location.lat();



                var longitude = results[0].geometry.location.lng();



                $('#drop_off_lat').val(latitude);



                $('#drop_off_lng').val(longitude);



              } 



            }); 



          })

  

   function reserve(name){

          $('#car_name').val(name);

          $('#exampleModal').modal('show');

      }
$('.external-link').on('click',function(){

    event.preventDefault();

    var href = $(this).attr('href');

    window.location=base_url+ href;

  })     