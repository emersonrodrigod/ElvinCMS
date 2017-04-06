@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         @lang('_.Edit') {{Lang::choice('cms_nav.Category', 1)}}
      </h1>
      {!! Breadcrumbs::render('admin-users-edit') !!}
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
        @if( Auth::user()->role->name != 'developer' && $user->is_erasable == "0"  )
          <h2>Bu sayfaya erişim yetkiniz bulunmamaktadır.</h2>
        @else
        
        <!-- form start -->
        {!! Form::model($user, ['method' => 'patch', 'route' => ['users.update', $user->id]]) !!}
          @include('cms.users.form', ['submit_text' => @trans('Edit')])
        {!! Form::close() !!}

        @endif

      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection