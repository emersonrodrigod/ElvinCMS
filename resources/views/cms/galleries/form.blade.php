<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_galleries.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  {!! Form::isVisible($gallery, ['class' => 'form-control']) !!}
  {!! Form::isErasable($gallery, ['class' => 'form-control']) !!}  

  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>