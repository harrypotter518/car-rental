@push('css')
<script type="text/javascript">
	var extra_image_1_height_{{$wid->id}} = "{{$wid->extra_image_1_height}}";
	var extra_image_1_width_{{$wid->id}} = "{{$wid->extra_image_1_width}}";

  var extra_image_2_height_{{$wid->id}} = "{{$wid->extra_image_2_height}}";
  var extra_image_2_width_{{$wid->id}} = "{{$wid->extra_image_2_width}}";
</script>
@endpush
<input type="hidden" name="widget_page" value="{{$page->slug}}">
<input type="hidden" id="data_filer_widget_image_1_{{$wid->id}}" <?php if(isset($widget_data)){echo 'value="'.$widget_data->extra_image_1.'"';} ?> name="extra_image_1">

<input type="hidden" id="data_filer_widget_image_2_{{$wid->id}}" <?php if(isset($widget_data)){echo 'value="'.$widget_data->extra_image_2.'"';} ?> name="extra_image_2">


<div class="row">



  

  @if($wid->extra_fields)
  @for($i = 1 ; $i<=$wid->extra_fields; $i++)
    <div class="col-md-12">
      <div class="form-group">
      	@php
      	$label = 'extra_field_title_'.$i;
      	$name = 'extra_field_'.$i;
      	@endphp
	    {!! Form::label($name, $wid->$label, ['class' => 'font-weight-bold']) !!}
	    {!! Form::text($name, null, array('class'=>'form-control', 'id'=>$name, 'placeholder'=>$wid->$label, 'required'=>'required')) !!}
	  </div>
	</div>
	@endfor
  @endif

  @if($wid->is_extra_image_title_1)
    <div class="col-md-12">
      <div class="form-group">
	    <div class="sub-title">{{$wid->extra_image_title_1}}</div>
	    <input type="file" name="image" id="filer_widget_image_1_{{$wid->id}}">
	  </div>
	</div>
  @endif

  @if($wid->is_extra_image_title_2)
    <div class="col-md-12">
      <div class="form-group">
      <div class="sub-title">{{$wid->extra_image_title_2}}</div>
      <input type="file" name="image" id="filer_widget_image_2_{{$wid->id}}">
    </div>
  </div>
  @endif

  @if($wid->is_description)
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('description', $wid->title.' Description', ['class' => 'font-weight-bold']) !!}
        {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>$wid->title.' Description', 'required'=>'required')) !!}
     </div>
  </div>
  @endif

  @if($wid->radio_buttons)
  @for($i = 1 ; $i<=$wid->radio_buttons; $i++)
      @php
        $label = 'radio_button_title_'.$i;
        $name = 'radio_button_'.$i;
      @endphp
      <div class="col-md-12 col-xl-6 m-b-30">
      <h4 class="sub-title">{{$wid->$label}}</h4>
      <div class="form-radio">
      <div class="radio radio-inline">

      <label>
      <input type="radio" name="{{$name}}" value="1" <?php 
        if(isset($widget_data) && $widget_data->$name == 1){echo 'checked';} else if(!isset($widget_data)){ echo 'checked';}
      ?> >
      <i class="helper"></i>Yes
      </label>
      </div>
      <div class="radio radio-inline">
      <label>
      <input type="radio" value="0" name="{{$name}}" <?php if(isset($widget_data) && $widget_data->$name == 0){echo 'checked';}
      ?>>
      <i class="helper"></i>No
      </label>
      </div>
      </div>
      </div>
  @endfor
  @endif

  @if($wid->is_bullets)
  
  <div class="col-md-12">
      <div id="dynamic_form_{{$wid->id}}">
          <div class="form-group">
            <label for="title">{{$wid->title}} Bullet  *</label>
            <div class="row">
              <div class="col-md-9">
                <input type="text" name="bullets" id="bullets"  class="form-control" placeholder="{{$wid->title}} BULLET">
              </div>
              <div class="col-md-3">
                <div class="button-group">
                      <a style="font-size: 12px;" href="javascript:void(0)" class="btn btn-primary" id="plus">Add More</a>
                      <a style="font-size: 12px;" href="javascript:void(0)" class="btn btn-danger" id="minus">Remove</a>
                  </div>
              </div>
            </div>
            
          </div>
      </div> 
  </div>
         
  </div>
  </div>
  @endif


</div>
@push('js')
<script type="text/javascript">
  
</script>

@endpush