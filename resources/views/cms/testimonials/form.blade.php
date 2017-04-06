<div class="box-body">         
  
  <div class="form-group">
    <label>@lang('cms_testimonials.Person')</label>
    {!! Form::text('person', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_testimonials.Text')</label>
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('_.Is Approved?')</label>
    @if ($testimonial->is_approved == "0")
      {!! Form::select('is_approved', [1 => @trans('_.True'), 0 => @trans('_.False')], 0, ['class' => 'form-control']) !!}
    @else
      {!! Form::select('is_approved', [1 => @trans('_.True'), 0 => @trans('_.False')], 1, ['class' => 'form-control']) !!}
    @endif
  </div>
  {!! Form::isVisible($testimonial, ['class' => 'form-control']) !!}
  {!! Form::isErasable($testimonial, ['class' => 'form-control']) !!}
  
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>