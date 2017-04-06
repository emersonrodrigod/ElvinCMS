@extends('layouts.error')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>{{config('settings.Site_name')}}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">@lang('auth.Sign in') | <a href="{{ url('/register') }}">@lang('auth.Register')</a></p>
    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="@lang('auth.E-Mail Address')">

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

        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember"> @lang('auth.Remember me')
            </label>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" id="loginForm" class="btn btn-primary">@lang('auth.Sign in')</button>
          <a class="btn btn-link" href="{{ url('/password/reset') }}">@lang('auth.Forgot your password')?</a>
        </div>
    </form>

    <div class="form-group" align="center">
      <button type="button" onclick="log_as_demo()" class="btn-flat">@lang('auth.Try now with demo account!')</button>
    </div>

  </div>
</div>
<script type="text/javascript">
  function log_as_demo() {
    $('#email').val('demo@guncebektas.com');
    $('#password').val('123456');
    //document.URL == 'elvincms.app/login';
   $("#loginForm").click();
}
</script>
@endsection
