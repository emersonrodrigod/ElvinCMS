@extends('layouts.cms')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('_.New') {{Lang::choice('cms_nav.Post', 1)}}
        @include('cms.includes.notes.headerCreate')
      </h1>
      {!! Breadcrumbs::render('admin-posts-create') !!}
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden">    
      
      @include('cms.includes.message')

      <div class="box box-primary">
        <!--
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        -->
        
        <!-- form start -->
        {!! Form::model($post = new App\Post, ['route' => ['posts.store']]) !!}
          @include('cms.posts.form', ['submit_text' => @trans('_.Save')])
       {!! Form::close() !!}
      </div>
  

      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection