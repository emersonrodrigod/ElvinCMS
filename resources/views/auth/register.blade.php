@extends('layouts.error')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>{{config('settings.Site_name')}}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">@lang('auth.Register') | <a href="{{ url('/login') }}">@lang('auth.Sign in')</a></p>
    <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="@lang('auth.Name')">

          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="@lang('auth.E-Mail Address')">

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
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="@lang('auth.Confirm Password')">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">@lang('auth.Register')</button> 
        </div>
    </form>
  </div>
</div>
@endsection
