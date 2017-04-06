@extends('layouts.error')

@section('content')
  
    <div class="login-box">
      <div class="login-logo">
        <a href="/">{{config('settings.Site_name')}}</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <h1>Oops! - @lang('errors.Error') 404</h1>
        <h3>@lang('errors.We can\'t seem to find the page you\'re looking for').</h3>
        <p>@lang('errors.Here are some helpful links instead'):</p>
        <a href="./">@lang('errors.Home')</a><br>
        <a href="./admin" class="text-center">@lang('errors.Admin')</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection