
   <div class="row">
      <div class="col-md-12">
         <div class="form-group">
            {!! Form::label('title', 'Widget Title', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>'Widget Title')) !!}
         </div>
      </div>
     
   </div>
   <div class="row">
     <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('widget_page_id', 'Widget Page', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('widget_page_id', [''=>'Select Widget Page']+$widget_pages, null, array('class'=>'form-control', 'id'=>'widget_page_id')) !!}
         </div>
        
      </div>
      <div class="col-md-12">
        <div class="form-group">
          @php
            $fields = array(
                0 => 'No',
                1 => 'Yes',
            );
            @endphp
            {!! Form::label('is_description', 'Widget Description', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('is_description', $fields, null, array('class'=>'form-control', 'id'=>'is_description')) !!}
         </div>
        
      </div>

      <div class="col-md-12">
        <div class="form-group">
          @php
            $fields = array(
                0 => 'No',
                1 => 'Yes',
            );
            @endphp
            {!! Form::label('is_bullets', 'Widget Bullets', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('is_bullets', $fields, null, array('class'=>'form-control', 'id'=>'is_bullets')) !!}
         </div>
        
      </div>
      
  </div>
   

   <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('is_extra_image_title_1', 'Widget Image 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('is_extra_image_title_1', $fields, null, array('class'=>'form-control', 'id'=>'is_extra_image_title_1')) !!}
         </div>
        
      </div>
      <div class="col-md-4 image_section">
         <div class="form-group">
            {!! Form::label('extra_image_title_1', 'Widget Image 1 Title', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_image_title_1', null, array('class'=>'form-control', 'id'=>'extra_image_title_1', 'placeholder'=>'Widget Image 1 Title')) !!}
         </div>
      </div>
      <div class="col-md-4 image_section">
         <div class="form-group">
            {!! Form::label('extra_image_1_height', 'Thumbnail Height', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_image_1_height', null, array('class'=>'form-control', 'id'=>'extra_image_1_height', 'placeholder'=>'Thumbnail Height')) !!}
         </div>
      </div>
      <div class="col-md-4 image_section">
         <div class="form-group">
            {!! Form::label('extra_image_1_width', 'Thumbnail Width', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_image_1_width', null, array('class'=>'form-control', 'id'=>'extra_image_1_width', 'placeholder'=>'Thumbnail Width')) !!}
         </div>
      </div>

       
   </div>

   <div class="row">
      <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('is_extra_image_title_2', 'Widget Image 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('is_extra_image_title_2', $fields, null, array('class'=>'form-control', 'id'=>'is_extra_image_title_2')) !!}
         </div>
        
      </div>
      <div class="col-md-4 image_section_2">
         <div class="form-group">
            {!! Form::label('extra_image_title_2', 'Widget Image 2 Title', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_image_title_2', null, array('class'=>'form-control', 'id'=>'extra_image_title_2', 'placeholder'=>'Widget Image 2 Title')) !!}
         </div>
      </div>
      <div class="col-md-4 image_section_2">
         <div class="form-group">
            {!! Form::label('extra_image_2_height', 'Thumbnail Height', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_image_2_height', null, array('class'=>'form-control', 'id'=>'extra_image_2_height', 'placeholder'=>'Thumbnail Height')) !!}
         </div>
      </div>
      <div class="col-md-4 image_section_2">
         <div class="form-group">
            {!! Form::label('extra_image_2_width', 'Thumbnail Width', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_image_2_width', null, array('class'=>'form-control', 'id'=>'extra_image_2_width', 'placeholder'=>'Thumbnail Width')) !!}
         </div>
      </div>
   </div>

   
   <div class="row">
      <div class="col-md-12">
         <div class="form-group">
            @php
            $extra_fields = array(
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8
            );
            @endphp
            {!! Form::label('extra_fields', 'Extra Fields', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_fields', [''=>'Select Extra Fields']+$extra_fields, null, array('class'=>'form-control', 'id'=>'extra_fields')) !!}
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_1', 'Extra Field Title 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_1', null, array('class'=>'form-control', 'id'=>'extra_field_title_1', 'placeholder'=>'Extra Field Title 1')) !!}
         </div>
      </div>
      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_2', 'Extra Field Title 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_2', null, array('class'=>'form-control', 'id'=>'extra_field_title_2', 'placeholder'=>'Extra Field Title 2')) !!}
         </div>
      </div>

      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_3', 'Extra Field Title 3', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_3', null, array('class'=>'form-control', 'id'=>'extra_field_title_3', 'placeholder'=>'Extra Field Title 3')) !!}
         </div>
      </div>
      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_4', 'Extra Field Title 4', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_4', null, array('class'=>'form-control', 'id'=>'extra_field_title_4', 'placeholder'=>'Extra Field Title 4')) !!}
         </div>
      </div>

      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_5', 'Extra Field Title 5', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_5', null, array('class'=>'form-control', 'id'=>'extra_field_title_5', 'placeholder'=>'Extra Field Title 5')) !!}
         </div>
      </div>
      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_6', 'Extra Field Title 6', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_6', null, array('class'=>'form-control', 'id'=>'extra_field_title_6', 'placeholder'=>'Extra Field Title 6')) !!}
         </div>
      </div>

      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_7', 'Extra Field Title 7', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_7', null, array('class'=>'form-control', 'id'=>'extra_field_title_7', 'placeholder'=>'Extra Field Title 7')) !!}
         </div>
      </div>

      <div class="col-md-12 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_8', 'Extra Field Title 8', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_8', null, array('class'=>'form-control', 'id'=>'extra_field_title_8', 'placeholder'=>'Extra Field Title 8')) !!}
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-md-12">
         <div class="form-group">
            @php
            $radio_buttons = array(
                1 => 1,
                2 => 2,
                3 => 3,
            );
            @endphp
            {!! Form::label('radio_buttons', 'Radio Buttons', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('radio_buttons', [''=>'Select Radio Buttons']+$radio_buttons, null, array('class'=>'form-control', 'id'=>'radio_buttons')) !!}
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 extra_button_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('radio_button_title_1', 'Radio Button Title 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('radio_button_title_1', null, array('class'=>'form-control', 'id'=>'radio_button_title_1', 'placeholder'=>'Radio Button Title 1')) !!}
         </div>
      </div>
      <div class="col-md-12 extra_button_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('radio_button_title_2', 'Radio Button Title 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('radio_button_title_2', null, array('class'=>'form-control', 'id'=>'radio_button_title_2', 'placeholder'=>'Radio Button Title 2')) !!}
         </div>
      </div>

      <div class="col-md-12 extra_button_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('radio_button_title_3', 'Radio Button Title 3', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('radio_button_title_3', null, array('class'=>'form-control', 'id'=>'radio_button_title_3', 'placeholder'=>'Radio Button Title 3')) !!}
         </div>
      </div>
   </div>
  

@push('js')

<script type="text/javascript">
    extrafields("{{old('extra_fields', (isset($widget))? $widget->extra_fields:'')}}");
    $('#extra_fields').on('change',function(){
        extrafields($(this).val());
    })
    function extrafields(val){
        $('.extra_field_title').hide();
        for (var i = 1; i <= val; i++) {
            $('#extra_field_title_'+i).parent().parent().show(); 
        }
    }


    radio_buttons("{{old('radio_buttons', (isset($widget))? $widget->radio_buttons:'')}}");
    $('#radio_buttons').on('change',function(){
        radio_buttons($(this).val());
    })
    function radio_buttons(val){
        $('.extra_button_title').hide();
        for (var i = 1; i <= val; i++) {
            $('#radio_button_title_'+i).parent().parent().show(); 
        }
    }

    show_thumb("{{old('is_extra_image_title_1', (isset($widget))? $widget->is_extra_image_title_1:'')}}");
    $('#is_extra_image_title_1').on('change',function(){
        show_thumb($(this).val());
    })

    function show_thumb(val){
        if(val==1){
            $('.image_section').show();
        }else{
            $('.image_section').hide();
        }
    }

    show_thumb_2("{{old('is_extra_image_title_2', (isset($widget))? $widget->is_extra_image_title_2:'')}}");
    $('#is_extra_image_title_2').on('change',function(){
        show_thumb_2($(this).val());
    })

    function show_thumb_2(val){
        if(val==1){
            $('.image_section_2').show();
        }else{
            $('.image_section_2').hide();
        }
    }


</script>

@endpush