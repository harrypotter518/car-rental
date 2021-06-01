var input_pick_up = document.getElementById("checkbox6_input");

var autocomplete_pick_up = new google.maps.places.Autocomplete(input_pick_up);

var input_drop_off = document.getElementById("checkbox5_input");

var autocomplete_drop_off = new google.maps.places.Autocomplete(input_drop_off);

$("#checkbox6_input").on("keyup", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            // $("#pick_up_lat").val(latitude);

            // $("#pick_up_lng").val(longitude);
        }
    });
});

$("#checkbox6_input").on("change", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            // $("#pick_up_lat").val(latitude);

            // $("#pick_up_lng").val(longitude);
        }
    });
});

$("#checkbox5_input").on("keyup", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            // $("#drop_off_lat").val(latitude);

            // $("#drop_off_lng").val(longitude);
        }
    });
});

$("#checkbox5_input").on("change", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            // $("#drop_off_lat").val(latitude);

            // $("#drop_off_lng").val(longitude);
        }
    });
});
