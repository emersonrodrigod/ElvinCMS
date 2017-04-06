@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="slide-edit">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('_.Edit') {{Lang::choice('cms_nav.Slide', 1)}}
      </h1>
      {!! Breadcrumbs::render('admin-slides-create') !!}
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
        {!! Form::model($slide, ['method' => 'patch', 'route' => ['slides.update', $slide->id]]) !!}
          @include('cms.slides.form', ['submit_text' => @trans('Edit')])
        {!! Form::close() !!}
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_slides.Items In') {{$slide->title}}
      </h1>
    </section>
    <section class="content hidden-animation hidden">
      <div class="box box-primary">
        <div class="box-body box-photos">  
          <slide-items slide_id="{{ $slide->id }}" session_lang ="{{ Session::get('lang') }}"></slide-items>
        </div>
      </div>
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header" id="add-item">
      <h1>
        @lang('cms_slides.Add New Item') {{$slide->title}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">    
      <div class="box box-primary">
        <div class="box-body">  
          
          <slide-form slide_id="{{ $slide->id }}" :languages="{{ json_encode($languages) }}"  session_lang="{{ Session::get('lang') }}" multi_language = {{$multiLanguage}}></slide-form>

          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection