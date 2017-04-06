<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_pages.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_pages.Summary')</label>
    {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_pages.Text')</label>
    {!! Form::textarea('text', null, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_pages.Image')</label>
    {!! Form::finder('item', $page->item, ['class' => 'form-control']) !!}
  </div>
  
  {!! Form::isVisible($page, ['class' => 'form-control']) !!}
  {!! Form::isErasable($page, ['class' => 'form-control']) !!}
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>