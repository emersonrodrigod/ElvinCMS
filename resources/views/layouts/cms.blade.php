<!DOCTYPE html>
<html lang="{{Session::get('lang')}}">
  <head>
    @include('cms.includes.head')
  </head>
  <body>
    <div id="preloader" class="animated infinite pulse"></div>

    <div class="wrapper">

      @include('cms.includes.top')
      @include('cms.includes.nav')
      
      @yield('content')
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Version <b id="created-by-version">0.1.1</b>
        </div>
        <strong>Copyright &copy; 2016, Coded by <a id="created-by-link" href="#"></a>.</strong> Tüm hakları saklıdır
      </footer>
    
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    @include('cms.includes.rightpanel')
    @include('cms.includes.footer')
    
  
  </body>
</html>