<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        @if (Auth::user()->image)
        <img src="/data/_images/{{Auth::user()->image}}" class="img-circle" alt="User Image">
        @else
        <img src="/cms/img/avatar.jpg" class="img-circle" alt="User Image">
        @endif
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> 
          @if (Auth::user()->role->name == 'developer') 
            @lang('cms_nav.Developer')
          @elseif (Auth::user()->role->name == 'admin') 
            @lang('cms_nav.Admin')
          @else
            @lang('cms_nav.Editor')
          @endif
        </a>
      </div>
    </div>
    <!-- search form 
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Ara...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    .search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">@lang('cms_nav.NAVIGATION')</li>
      <li class="treeview">
        <a href="{{ url('admin/') }}">
          <i class="fa fa-dashboard"></i> <span>@lang('cms_nav.Dashboard')</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span>@lang('cms_nav.Settings')</span>
          <!--
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
          -->
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @if (Auth::user()->role->name == 'developer') 
          <li><a href="{{ url('admin/settings/general') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.General')</a></li>
          <li><a href="{{ url('admin/settings/modules') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Modules')</a></li>
          @endif
          <li><a href="{{ url('admin/settings/contact') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Contact')</a></li>
          <li><a href="{{ url('admin/settings/social') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Social Media')</a></li>
        </ul>
      </li>
      <!--
      @if ($settings['Dynamic_string_module'])
      <li>
        <a href="{{ url('admin/dynamic-strings') }}"> 
          <i class="fa fa-font"></i> <span>@lang('cms_nav.Dynamic strings')</span>
        </a>
      </li>
      @endif
      -->
      @if ($settings['Dynamic_string_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-font"></i>
          <span>@lang('cms_dynamic_strings.Dynamic_string')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @foreach($dynamic_strings as $dynamic_string)
          <li><a href="/admin/dynamic-strings/{{$dynamic_string->slug}}/edit"><i class="fa fa-circle-o"></i> {{$dynamic_string->index}}</a></li>
          @endforeach
        </ul>
      </li>
      @endif
      @if ($settings['Page_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-text"></i>
          <span>@lang('cms_nav.Pages')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/pages') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Pages')</a></li>
          <li><a href="{{ url('admin/pages/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Page', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Blog_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder-open"></i>
          <span>@lang('cms_nav.Blog')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/posts') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Posts')</a></li>
          <li><a href="{{ url('admin/posts/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Post', 1)}}</a></li>          
          <li><a href="{{ url('admin/categories') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Categories')</a></li>
          <li><a href="{{ url('admin/categories/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Category', 1)}}</a></li>
          <li><a href="{{ url('admin/tags') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Tags')</a></li>
          <li><a href="{{ url('admin/tags/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Tag', 1)}}</a></li>
          <li><a href="{{ url('admin/comments') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Comments')</a></li>
        
        </ul>
      </li>
      @endif
      @if ($settings['Gallery_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-image"></i> <span>@lang('cms_nav.Galleries')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/galleries') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Galleries')</a></li>
          <li><a href="{{ url('admin/galleries/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Gallery', 1)}}</a></li>
          <li><a onclick="BrowseServer('Images:/');"><i class="fa fa-circle-o"></i> @lang('cms_nav.Upload Image or Video')</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Slide_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-exchange"></i> <span>@lang('cms_nav.Slides')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/slides') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Slides')</a></li>
          <li><a href="{{ url('admin/slides/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Slide', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Menu_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i> <span>{{Lang::choice('cms_nav.Menu', 2)}}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/menus') }}"><i class="fa fa-circle-o"></i> {{Lang::choice('cms_nav.Menu', 2)}}</a></li>
          <li><a href="{{ url('admin/menus/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Menu Item', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Faq_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-question"></i> <span>@lang('cms_nav.Faqs')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/faqs') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Faqs')</a></li>
          <li><a href="{{ url('admin/faqs/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Faq', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Popup_module'])
      <li>
        <a href="{{ url('admin/popup') }}">
          <i class="fa fa-sticky-note"></i> <span>@lang('cms_nav.Popup Window')</span>
        </a>
      </li>
      @endif
      @if ($settings['Testimonials_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i> <span>@lang('cms_nav.Testimonials')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/testimonials') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Testimonials')</a></li>
          <li><a href="{{ url('admin/testimonials/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Testimonial', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Press_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-newspaper-o"></i> <span>@lang('cms_nav.Press')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/presses') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Press')</a></li>
          <li><a href="{{ url('admin/presses/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') @lang('cms_nav.Press')</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Project_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cubes"></i> <span>@lang('cms_nav.Projects')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/projects') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Projects')</a></li>
          <li><a href="{{ url('admin/projects/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Project', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['Event_module'])
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i> <span>@lang('cms_nav.Events')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/events') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Events')</a></li>
          <li><a href="{{ url('admin/events/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Event', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if ($settings['User_module'])
      <li class="treeview">
        <a href="{{ url('admin/users') }}">
          <i class="fa fa-user"></i> <span>@lang('cms_nav.Users')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle-o"></i> @lang('cms_nav.Users')</a></li>
          <li><a href="{{ url('admin/users/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.User', 1)}}</a></li>
        </ul>
      </li>
      @endif
      @if (Auth::user()->role->name == 'developer')  
      <li>
        <a href="{{ url('admin/logs') }}">
          <i class="fa fa-warning"></i> <span>@lang('cms_nav.Logs')</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/backups') }}">
          <i class="fa fa-cloud-upload"></i> <span>@lang('cms_nav.Backups')</span>
        </a>
      </li>
      @endif
      <li>
        <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out"></i> <span>@lang('cms_nav.Sign out')</span>
        </a>
        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        </form>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<script type="text/javascript">
  // CK editör
  function BrowseServer(startupPath, e)
  {
    // You can use the "CKFinder" class to render CKFinder in a page:
    var finder = new CKFinder();
    // The path for the installation of CKFinder (default = "/ckfinder/").
    finder.basePath = '../';
    // Startup path in a form: "Type:/path/to/directory/"
    finder.startupPath = startupPath;
    // Launch CKFinder
    finder.popup();
  }

</script> 