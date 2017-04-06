@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_nav.Settings')
      </h1>
      <!-- {!! Breadcrumbs::render('admin-settings') !!} -->
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden">

      @include('cms.includes.message')

      <div class="box box-primary">
        <div class="box-body">          
          {!! Form::model(['method' => 'patch', 'route' => ['settings.update']]) !!}
        
          @foreach ($results AS $result) 
            <div class="form-group">
              <label>@lang('cms_settings.'.$result->index)</label>
              @if ($result->type == 'finder')
                {!! Form::finder($result->index, $result->value, ['class' => 'form-control']) !!}
              @elseif ($result->type == 'textarea')
                {!! Form::textarea($result->index, $result->value, ['class' => 'form-control']) !!}
              @elseif ($result->type == 'booleon')
                {!! Form::select($result->index, [1 => @trans('_.True'), 0 => @trans('_.False')], $result->value, ['class' => 'form-control']) !!}
              @elseif ($result->type == 'map')
                {!! Form::map($result->index, $result->value, ['class' => 'form-control']) !!}
              @else
                {!! Form::text($result->index, $result->value, ['class' => 'form-control']) !!}
              @endif
            </div>
          @endforeach    
          <div class="box-footer">
            {!! Form::submit(@trans('_.Save'), ['class' => 'btn btn-primary']) !!}
          </div>    

          {!! Form::close() !!}
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection