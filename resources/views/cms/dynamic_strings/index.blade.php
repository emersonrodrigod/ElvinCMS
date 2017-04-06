@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_nav.Dynamic strings')
        @include('cms.includes.notes.headerEdit')
      </h1>
      <!-- {!! Breadcrumbs::render('admin-settings') !!} -->
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden">
    
      @include('cms.includes.message')

      <div class="box box-primary">
        <div class="box-body">          
          {!! Form::open(['method' => 'patch', 'route' => ['dynamic-strings.updateAll']]) !!}
        
          @foreach ($dynamic_strings AS $result) 
            <div class="form-group">
              <label>{{$result->index}}</label>
              @if ($result->type == 'finder')
                {!! Form::finder($result->index, $result->value, ['class' => 'form-control']) !!}
              @elseif ($result->type == 'textarea')
                {!! Form::textarea($result->index, $result->value, ['class' => 'form-control', 'rows' => 2]) !!}
              @elseif ($result->type == 'editor')
                {!! Form::textarea($result->index, $result->value, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
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