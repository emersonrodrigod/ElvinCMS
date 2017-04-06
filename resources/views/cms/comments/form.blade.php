<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_comments.Person')</label>
    {!! Form::text('person', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_comments.Text')</label>
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('_.Is Approved?')</label>
    @if ($comment->is_approved == "0")
      {!! Form::select('is_approved', [1 => @trans('_.True'), 0 => @trans('_.False')], 0, ['class' => 'form-control']) !!}
    @else
      {!! Form::select('is_approved', [1 => @trans('_.True'), 0 => @trans('_.False')], 1, ['class' => 'form-control']) !!}
    @endif
  </div>
  {!! Form::isVisible($comment, ['class' => 'form-control']) !!}
  {!! Form::isErasable($comment, ['class' => 'form-control']) !!}
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>