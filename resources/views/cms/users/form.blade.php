<div class="box-body">         

  <div class="form-group">
    <label>@lang('cms_users.Name')</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label>@lang('cms_users.Email')</label>
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label>@lang('cms_users.Password')</label>
    {!! Form::password('password', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label>@lang('cms_users.Avatar')</label>
    @if ($user->image)
      {!! Form::finder('image', $user->image, ['class' => 'form-control']) !!}
    @else
      {!! Form::finder('image', null, ['class' => 'form-control']) !!}
    @endif
  </div>

  <div class="form-group">
    <label>@lang('cms_users.Text')</label>
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
  </div>

  @if (Auth::user()->role->name =='developer')
    <div class="form-group">
      <label>{{lang::choice('cms_users.Role', 1)}}</label>
      {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
    </div>
  @endif

  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>