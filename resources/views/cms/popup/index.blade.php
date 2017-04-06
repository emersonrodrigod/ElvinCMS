@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_nav.Popup Window')
        @include('cms.includes.notes.headerIndex')
      </h1>
      {!! Breadcrumbs::render('admin-popup') !!}    
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden">
      
      @include('cms.includes.message')

      <div class="box box-primary">
        <!-- form start -->
        {!! Form::model($popup, ['method' => 'patch', 'route' => ['popup.update', $popup->id]]) !!}
          @include('cms.popup.form', ['submit_text' => @trans('_.Edit')])
        {!! Form::close() !!}
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection