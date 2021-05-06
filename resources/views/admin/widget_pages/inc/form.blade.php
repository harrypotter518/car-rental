<div class="row">
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('title', 'Widget Page Title', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>'Widget Page Title')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'title') !!}
     </div>
  </div>
</div>