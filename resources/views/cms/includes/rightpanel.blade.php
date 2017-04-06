<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark hidden-xs">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-envelope-o"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <ul class="list-unstyled list-padding"> 
        <h3 class="control-sidebar-heading">@lang('cms.Add new items')</h3>
        @if ($settings['Page_module'])
          <li><a href="{{ url('admin/pages/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Page', 1)}}</a></li>
        @endif
        @if ($settings['Blog_module'])
          <li><a href="{{ url('admin/posts/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Post', 1)}}</a></li>
        @endif
        @if ($settings['Gallery_module'])
          <li><a href="{{ url('admin/galleries/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Gallery', 1)}}</a></li>
        @endif
        @if ($settings['Slide_module'])
          <li><a href="{{ url('admin/slides/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Slide', 1)}}</a></li>
        @endif
        @if ($settings['Menu_module'])
          <li><a href="{{ url('admin/menus/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Menu Item', 1)}}</a></li>
        @endif
        @if ($settings['Faq_module'])
          <li><a href="{{ url('admin/faqs/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.Faq', 1)}}</a></li>
        @endif
        @if ($settings['Popup_module'])
          <li><a href="{{ url('admin/popup') }}"><i class="fa fa-circle-o"></i> <span>@lang('cms_nav.Popup Window')</span></a></li>
        @endif
        @if ($settings['User_module'])
          <li><a href="{{ url('admin/users/create') }}"><i class="fa fa-circle-o"></i> @lang('_.New') {{Lang::choice('cms_nav.User', 1)}}</a></li>
        @endif
        <!-- /.form-group -->
      </ul>
      <!-- /.control-sidebar-menu -->
    </div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <h3 class="control-sidebar-heading">@lang('cms.Contact with developer')</h3>
      <form id="mailto">
        <div id="mailto-message"></div>
        {!! Form::text('emailTo', null, ['class' => 'hidden created-by-mail']) !!}
        <div class="form-group">
          <label>@lang('cms.Subject')</label>
          {!! Form::text('subject', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          <label>@lang('cms.Text')</label>
          {!! Form::textarea('text', null, ['class' => 'form-control', 'rows' => 7]) !!}
        </div>
        <input type="submit" class="btn btn-info" id="mailto-button" value="@lang('_.Submit')" />
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
