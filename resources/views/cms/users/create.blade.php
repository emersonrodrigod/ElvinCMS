@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         @lang('_.New') {{Lang::choice('cms_nav.User', 1)}}
      </h1>
      {!! Breadcrumbs::render('admin-users-create') !!}
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
        {!! Form::model($user = new App\User, ['route' => ['users.store']]) !!}
          @include('cms.users.form', ['submit_text' => @trans('Save')])
        {!! Form::close() !!}

      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection