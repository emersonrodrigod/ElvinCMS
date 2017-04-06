@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="gallery-edit">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('_.Edit') {{Lang::choice('cms_nav.Gallery', 1)}}
      </h1>
      {!! Breadcrumbs::render('admin-galleries-create') !!}
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
        {!! Form::model($gallery, ['method' => 'patch', 'route' => ['galleries.update', $gallery->id]]) !!}
          @include('cms.galleries.form', ['submit_text' => 'Edit'])
        {!! Form::close() !!}
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_galleries.Items In') {{$gallery->title}}
      </h1>
    </section>
    <section class="content hidden-animation hidden">
      <div class="box box-primary">
        <div class="box-body">  

            <gallery-items gallery_id="{{ $gallery->id }}" session_lang ="{{ Session::get('lang') }}"></gallery-items>
                  
        </div>
      </div>
    </section>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_galleries.Add New Item') {{$gallery->title}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">    
      <div class="box box-primary">
        <div class="box-body">  

          <gallery-form gallery_id="{{ $gallery->id }}" :languages="{{ json_encode($languages) }}"  session_lang="{{ Session::get('lang') }}" multi_language = {{$multiLanguage}}></gallery-form>
          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection