<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_tags.Name')</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>