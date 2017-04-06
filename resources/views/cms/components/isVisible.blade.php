@if (Auth::user()->role->name == 'developer')
  <div class="form-group">
    <label>@lang('_.Is Visible?')</label>
    @if ($value->is_visible == "0")
      {!! Form::select('is_visible', [1 => @trans('_.True'), 0 => @trans('_.False')], 0, ['class' => 'form-control']) !!}
    @else
      {!! Form::select('is_visible', [1 => @trans('_.True'), 0 => @trans('_.False')], 1, ['class' => 'form-control']) !!}
    @endif
  </div>
@endif


