   function update_status(id) {

        var current_status = $("#sts_" + id + " span").html();

        $.ajax({

            type: 'GET',

            url: base_url+'/admin/data-status/' + id + '/' + current_status,

            data: {

                '_token': $('input[name=_token]').val(),

            },

            success: function(sts) {

                var class_label = 'success';

                if (sts != 'active')

                    var class_label = 'warning';

                $("#sts_" + id).html('<span class="btn btn-' + class_label + '">' + sts + '</span>');

            }

        });



    }