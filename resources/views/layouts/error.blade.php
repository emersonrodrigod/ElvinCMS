<!DOCTYPE html>
<html lang="{{Session::get('lang')}}">
  <head>
    @include('cms.includes.head')
    <link rel="stylesheet" type="text/css" href="{{ url('errors/countdown/jquery.countdown.css') }}"> 
    <script type="text/javascript" src="{{ url('errors/countdown/jquery.plugin.min.js') }}"></script> 
    <script type="text/javascript" src="{{ url('errors/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('errors/countdown/jquery.countdown')}}-{{Session::get('lang')}}.js"></script>
  </head>
  
  <body class="hold-transition login-page">
    @yield('content')
    
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        Version <b id="created-by-version">0.1.1</b>
      </div>
      <strong>Copyright &copy; 2016, Coded by <a id="created-by-link" href="#"></a>.</strong> Tüm hakları saklıdır
    </footer>
    
    @include('cms.includes.footer')
    

  </body>
</html>