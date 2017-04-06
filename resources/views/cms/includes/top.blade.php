<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('admin') }}" class="logo">
    <img class="created-by-logo" src="">
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">@lang('cms_top.Toggle navigation')</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
        <!-- Tasks: style can be found in dropdown.less -->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-language"></i>
            <span class="label label-danger">{{strtoupper(Session::get('lang'))}}</span>
          </a>
          @if ($settings['Multi_language'])
          <ul class="dropdown-menu">
            <li class="header">@lang('cms_top.Select to change') </li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="{{ url('lang/tr') }}">
                    <img class="flag flag-xs" src="/cms/img/flags/tr.png"> Türkçe
                  </a>
                </li>
                <li>
                  <a href="{{ url('lang/en') }}">
                    <img class="flag flag-xs" src="/cms/img/flags/en.png"> English
                  </a>
                </li>
                <li class="sub-header text-center">
                  @lang('cms_top.To add more options please contact with')
                </li>
                <li class="text-center">
                  <a href="#" class="created-by-mailto"></a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="{{ url('admin/settings/language') }}">@lang('cms_top.Language settings')</a>
            </li>
          </ul>
          @endif
        </li>
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            @if (Auth::user()->image)
            <img src="/data/_images/{{Auth::user()->image}}" class="user-image" alt="User Image">
            @else
            <img src="/cms/img/avatar.jpg" class="user-image" alt="User Image">
            @endif
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              @if (Auth::user()->image)
              <img src="/data/_images/{{Auth::user()->image}}" class="img-circle" alt="User Image">
              @else
              <img src="/cms/img/avatar.jpg" class="img-circle" alt="User Image">
              @endif
              <p>
                {{ Auth::user()->name }}
                <!--<small>Member since Nov. 2012</small>-->
              </p>
            </li>
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="/admin/users/{{Auth::user()->id}}/edit" class="btn btn-default btn-flat">@lang('cms_top.Profile')</a>
              </div>
              <div class="pull-right">
                <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">@lang('cms_top.Sign out')</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li class="hidden-xs">
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>