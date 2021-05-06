var input_pick_up = document.getElementById("pick_up");

var autocomplete_pick_up = new google.maps.places.Autocomplete(input_pick_up);

var input_drop_off = document.getElementById("drop_off");

var autocomplete_drop_off = new google.maps.places.Autocomplete(input_drop_off);

$("#pick_up").on("keyup", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            $("#pick_up_lat").val(latitude);

            $("#pick_up_lng").val(longitude);
        }
    });
});

$("#pick_up").on("change", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            $("#pick_up_lat").val(latitude);

            $("#pick_up_lng").val(longitude);
        }
    });
});

$("#drop_off").on("keyup", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            $("#drop_off_lat").val(latitude);

            $("#drop_off_lng").val(longitude);
        }
    });
});

$("#drop_off").on("change", function () {
    var geocoder = new google.maps.Geocoder();

    var address = $(this).val();

    geocoder.geocode({ address: address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();

            var longitude = results[0].geometry.location.lng();

            $("#drop_off_lat").val(latitude);

            $("#drop_off_lng").val(longitude);
        }
    });
});

function reserve(name) {
    $("html, body").animate(
        {
            scrollTop: $(".bformBox").offset().top,
        },
        2000
    );

    $("#car_name").val(name);
}

$("#newsletter").on("submit", function (e) {
    var email = $("#email").val();

    if (email == "") {
        function notify(from, align, icon, type, animIn, animOut) {
            $.growl(
                {
                    icon: icon,

                    title: " <strong>Error!</strong> ",

                    message: "Email Address is required!",

                    url: "",
                },
                {
                    element: "body",

                    type: type,

                    allow_dismiss: true,

                    placement: {
                        from: from,

                        align: align,
                    },

                    offset: {
                        x: 30,

                        y: 30,
                    },

                    spacing: 10,

                    z_index: 999999,

                    delay: 2500,

                    timer: 1000,

                    url_target: "_blank",

                    mouse_over: false,

                    animate: {
                        enter: animIn,

                        exit: animOut,
                    },

                    icon_type: "class",

                    template:
                        '<div data-growl="container" class="alert" role="alert">' +
                        '<button type="button" class="close" data-growl="dismiss">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '<span class="sr-only">Close</span>' +
                        "</button>" +
                        '<span data-growl="icon"></span>' +
                        '<span data-growl="title"></span>' +
                        '<span data-growl="message"></span>' +
                        '<a href="#" data-growl="url"></a>' +
                        "</div>",
                }
            );
        }

        var nFrom = "top";

        var nAlign = "right";

        var nIcons = $(this).attr("data-icon");

        var nType = "danger";

        var nAnimIn = "animated rotateIn";

        var nAnimOut = "animated rotateOut";

        notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);

        return false;
    }

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    $.ajax({
        type: "POST",

        url: url,

        data: form.serialize(), // serializes the form's elements.

        success: function (data) {
            function notify(from, align, icon, type, animIn, animOut) {
                $.growl(
                    {
                        icon: icon,

                        title: " <strong>Success!</strong> ",

                        message:
                            "You have successfully subscribed to our newsletter",

                        url: "",
                    },
                    {
                        element: "body",

                        type: type,

                        allow_dismiss: true,

                        placement: {
                            from: from,

                            align: align,
                        },

                        offset: {
                            x: 30,

                            y: 30,
                        },

                        spacing: 10,

                        z_index: 999999,

                        delay: 2500,

                        timer: 1000,

                        url_target: "_blank",

                        mouse_over: false,

                        animate: {
                            enter: animIn,

                            exit: animOut,
                        },

                        icon_type: "class",

                        template:
                            '<div data-growl="container" class="alert" role="alert">' +
                            '<button type="button" class="close" data-growl="dismiss">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '<span class="sr-only">Close</span>' +
                            "</button>" +
                            '<span data-growl="icon"></span>' +
                            '<span data-growl="title"></span>' +
                            '<span data-growl="message"></span>' +
                            '<a href="#" data-growl="url"></a>' +
                            "</div>",
                    }
                );
            }

            var nFrom = "top";

            var nAlign = "right";

            var nIcons = $(this).attr("data-icon");

            var nType = "success";

            var nAnimIn = "animated rotateIn";

            var nAnimOut = "animated rotateOut";

            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);

            $("#newsletter").trigger("reset");
        },
    });
});

if ($("#contactForm").length > 0) {
    $("#contactForm").validate({
        validateHiddenInputs: true,

        ignore: "",

        rules: {
            first_name: {
                required: true,

                maxlength: 500,
            },

            last_name: {
                required: true,

                maxlength: 500,
            },

            email_address: {
                required: true,
            },

            phone_number: {
                required: true,
            },

            message: {
                required: true,
            },
        },

        messages: {
            first_name: {
                required: "First Name is required",
            },

            last_name: {
                required: "Last Name is required",
            },

            email_address: {
                required: "Email Address is required",
            },

            phone_number: {
                required: "Phone Number is required",
            },

            message: {
                required: "Message is required",
            },
        },
    });
}
