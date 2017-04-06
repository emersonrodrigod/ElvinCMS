@extends('layouts.error')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>@lang('auth.Admin')</b><br>{{config('settings.Site_name')}}</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">@lang('auth.Sign in') | <a href="{{ url('/register') }}">@lang('auth.Register')</a></p>
    <form role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="@lang('auth.E-Mail Address')">

          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="form-control" name="password" required placeholder="@lang('auth.Password')">

          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="@lang('auth.Confirm Password')">

          @if ($errors->has('password_confirmation'))
              <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">@lang('auth.Reset password')</button>
        </div>
    </form>
  </div>
</div>
@endsection
