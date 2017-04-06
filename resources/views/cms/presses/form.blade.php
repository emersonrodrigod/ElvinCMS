<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_presses.Text')</label>
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_presses.Image')</label>
    {!! Form::finder('image', $press->image, ['class' => 'form-control']) !!}
  </div>
  
  {!! Form::isVisible($press, ['class' => 'form-control']) !!}
  {!! Form::isErasable($press, ['class' => 'form-control']) !!}
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>