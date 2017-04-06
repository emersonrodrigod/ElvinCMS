<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('_.Is Visible?')</label>
    {!! Form::select('is_visible', [1 => @trans('_.True'), 0 => @trans('_.False')], null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label>@lang('cms_popup.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  
  <div class="form-group">
    <label>@lang('cms_popup.Text')</label>
    {!! Form::textarea('text', null, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
  </div>
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>