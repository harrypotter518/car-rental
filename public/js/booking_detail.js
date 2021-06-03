var input_pick_up = document.getElementById("checkbox6_input");

var autocomplete_pick_up = new google.maps.places.Autocomplete(input_pick_up);

var input_drop_off = document.getElementById("checkbox5_input");

var autocomplete_drop_off = new google.maps.places.Autocomplete(input_drop_off);

var input_billing_address = document.getElementById("billing_address");

var autocomplete_billing_address = new google.maps.places.Autocomplete(input_billing_address);

var input_billing_city = document.getElementById("billing_city");

var autocomplete_billing_city = new google.maps.places.Autocomplete(input_billing_city);

var input_billing_state = document.getElementById("billing_state");

var autocomplete_billing_state = new google.maps.places.Autocomplete(input_billing_state);


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

$("#billing_address").on("keyup", function () {
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

$("#billing_address").on("change", function () {
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

$("#billing_city").on("keyup", function () {
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

$("#billing_city").on("change", function () {
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

$("#billing_state").on("keyup", function () {
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

$("#billing_state").on("change", function () {
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