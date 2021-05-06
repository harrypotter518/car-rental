<script type="text/javascript">
<?php 
if($widgets){
foreach($widgets as $wid){
$widget_data = App\Models\WidgetsData::where('widget_id',$wid->id)->first();
if($wid->is_bullets){
if($widget_data){ 

?>

$(document).ready(function() {
    var dynamic_form_{{$wid->id}} = $("#dynamic_form_{{$wid->id}}").dynamicForm("#dynamic_form_{{$wid->id}}", "#plus", "#minus", {
        limit: 10,
        formPrefix: "dynamic_form",
        normalizeFullForm: false,
        // JSON data which will prefill the form
        //data: [{reference_links:'ttttttt'}]

    });
    @if($widget_data->bullets)
    dynamic_form_{{$wid->id}}.inject({!!$widget_data->bullets!!});
    @endif
    
    
    //dynamic_form.inject([{p_name: 'Hemant',quantity: '123',remarks: 'testing remark'},{p_name: 'Harshal',quantity: '123',remarks: 'testing remark'}]);

    $("#dynamic_form_{{$wid->id}} #minus").on('click', function() {
        var initDynamicId = $(this).closest('#dynamic_form_{{$wid->id}}').parent().find(
                "[id^='dynamic_form_{{$wid->id}}']")
            .length;
        if (initDynamicId === 2) {
            $(this).closest('#dynamic_form_{{$wid->id}}').next().find('#minus').hide();
        }
        $(this).closest('#dynamic_form_{{$wid->id}}').remove();
    });

    $('form').on('submit', function(event) {
        var values = {};
        $.each($('form').serializeArray(), function(i, field) {
            values[field.name] = field.value;
        });
        //console.log(values)
        //event.preventDefault();
    })
});

<?php }else{ ?>
$(document).ready(function() {
    var dynamic_form_{{$wid->id}} = $("#dynamic_form_{{$wid->id}}").dynamicForm("#dynamic_form_{{$wid->id}}", "#plus", "#minus", {
        limit: 10,
        formPrefix: "dynamic_form",
        normalizeFullForm: false,
        // JSON data which will prefill the form
        //data: [{reference_links:'ttttttt'}]

    });
    dynamic_form_{{$wid->id}}.inject();
    
    //dynamic_form.inject([{p_name: 'Hemant',quantity: '123',remarks: 'testing remark'},{p_name: 'Harshal',quantity: '123',remarks: 'testing remark'}]);

    $("#dynamic_form_{{$wid->id}} #minus").on('click', function() {
        var initDynamicId = $(this).closest('#dynamic_form_{{$wid->id}}').parent().find(
                "[id^='dynamic_form_{{$wid->id}}']")
            .length;
        if (initDynamicId === 2) {
            $(this).closest('#dynamic_form_{{$wid->id}}').next().find('#minus').hide();
        }
        $(this).closest('#dynamic_form_{{$wid->id}}').remove();
    });

    $('form').on('submit', function(event) {
        var values = {};
        $.each($('form').serializeArray(), function(i, field) {
            values[field.name] = field.value;
        });
        //console.log(values)
        //event.preventDefault();
    })
});
<?php } } 
} } ?>
</script>
