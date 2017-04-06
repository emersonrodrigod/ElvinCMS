<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_faqs.Question')</label>
    {!! Form::text('question', null, ['class' => 'form-control']) !!}
  </div>
  
  <div class="form-group">
    <label>@lang('cms_faqs.Answer')</label>
    {!! Form::textarea('answer', null, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
  </div>
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>