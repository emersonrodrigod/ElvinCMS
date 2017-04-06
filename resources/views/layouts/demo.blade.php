<!DOCTYPE html>
<html lang="{{Session::get('lang')}}">
  <head>
    @include('demo.includes.head')
  </head>
  <body id="page-top">
    
    @include('demo.includes.nav')
      
    @yield('content')
      
    @include('demo.includes.footer')
    
  </body>
</html>