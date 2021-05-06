<div class="row">
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('title', 'Menu Type Title', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>'Menu Type Title')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'title') !!}
     </div>
  </div>
</div>