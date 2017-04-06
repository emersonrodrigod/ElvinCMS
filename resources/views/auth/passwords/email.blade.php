@extends('layouts.error')

<!-- Main Content -->
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>@lang('auth.Admin')</b><br>{{config('settings.Site_name')}}</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><a href="{{ url('/login') }}">@lang('auth.Sign in')</a> | <a href="{{ url('/register') }}">@lang('auth.Register')</a></p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ url('/password/email') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">       
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">@lang('auth.Send password reset link')</button>
      </div>
    </form>
  </div>
</div>
@endsection
