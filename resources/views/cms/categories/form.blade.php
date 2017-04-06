<div class="box-body">      
  
  <div class="form-group">
    <label>@lang('cms_categories.Parent Category')</label>
    {!! Form::select('parent_id', $items, null, ['class' => 'form-control']) !!}
  </div>
  
  <div class="form-group">
    <label>@lang('cms_categories.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  
  {!! Form::isVisible($category, ['class' => 'form-control']) !!}
  {!! Form::isErasable($category, ['class' => 'form-control']) !!}
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>