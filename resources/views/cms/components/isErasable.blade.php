@if (Auth::user()->role->name == 'developer')
  <div class="form-group">
    <label>@lang('_.Is Erasable?')</label>
    @if ($value->is_erasable == "0")
      {!! Form::select('is_erasable', [1 => @trans('_.True'), 0 => @trans('_.False')], 0, ['class' => 'form-control']) !!}
    @else
      {!! Form::select('is_erasable', [1 => @trans('_.True'), 0 => @trans('_.False')], 1, ['class' => 'form-control']) !!}
    @endif
  </div>
@endif