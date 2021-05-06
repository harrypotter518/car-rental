<div class="row">
  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('name', 'Admin Name', ['class' => 'font-weight-bold']) !!}
        {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Admin Name')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'name') !!}
     </div>
  </div>

  <div class="col-md-12">
     <div class="form-group">
        {!! Form::label('email', 'Admin Email', ['class' => 'font-weight-bold']) !!}
        {!! Form::email('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Admin Email')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'email') !!}
     </div>
  </div>

  <div class="col-md-6">
     <div class="form-group">
        {!! Form::label('password', 'Admin Password', ['class' => 'font-weight-bold']) !!}
        {!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>'Admin Password')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'password') !!}
     </div>
  </div>

  <div class="col-md-6">
     <div class="form-group">
        {!! Form::label('password_confirmation', 'Admin Confirm Password', ['class' => 'font-weight-bold']) !!}
        {!! Form::password('password_confirmation', array('class'=>'form-control', 'id'=>'password_confirmation', 'placeholder'=>'Admin Password')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'password_confirmation') !!}
     </div>
  </div>
</div>