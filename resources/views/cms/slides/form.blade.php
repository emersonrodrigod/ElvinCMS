<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_slides.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  
  {!! Form::isVisible($slide, ['class' => 'form-control']) !!}
  {!! Form::isErasable($slide, ['class' => 'form-control']) !!}  

  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>