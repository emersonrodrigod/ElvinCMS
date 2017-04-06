@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('_.Edit') {{Lang::choice('cms_nav.Press', 1)}}
        @include('cms.includes.notes.headerEdit')
      </h1>
      {!! Breadcrumbs::render('admin-presses-edit') !!}
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
        {!! Form::model($press, ['method' => 'patch', 'route' => ['presses.update', $press->id]]) !!}
          @include('cms.presses.form', ['submit_text' => @trans('_.Edit')])
        {!! Form::close() !!}
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection