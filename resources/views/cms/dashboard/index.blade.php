@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::get('cms_nav.Dashboard')}}
      </h1>
      {!! Breadcrumbs::render('admin') !!}
    </section>
    <!-- Main content -->
    <section class="content hidden-animation hidden">
      <div class="row">
        <div class="col-md-4 cover">
          <span>{{$categories}} {{Lang::choice('cms_nav.Category', $categories)}}</span>
          <a class="btn btn-xs btn-info" href="/admin/categories/create">@lang('_.New') {{Lang::choice('cms_nav.Category', 1)}}</a>
          <a href="/admin/categories">
            <img class="img-responsive" src="cms/img/categories.jpg">
          </a>
        </div>
        <div class="col-md-4 cover">
          <span>{{$posts}} {{Lang::choice('cms_nav.Post', $posts)}}</span>
          <a class="btn btn-xs btn-info" href="/admin/posts/create">@lang('_.New') {{Lang::choice('cms_nav.Post', 1)}}</a>
          <a href="/admin/posts">
            <img class="img-responsive" src="cms/img/posts.jpg">
          </a>
        </div>
        <div class="col-md-4 cover">
          <span>{{$users}} {{Lang::choice('cms_nav.User', $users)}}</span>
          <a class="btn btn-xs btn-info" href="/admin/users/create">@lang('_.New') {{Lang::choice('cms_nav.User', 1)}}</a>
          <a href="/admin/users">
            <img class="img-responsive" src="cms/img/users.jpg">
          </a>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->
@endsection