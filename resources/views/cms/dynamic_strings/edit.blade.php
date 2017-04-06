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
          {!! Form::model($dynamic_string,['method' => 'patch', 'route' => ['dynamic-strings.update',$dynamic_string->slug]]) !!}
        
            <div class="form-group">
              <label>{{$dynamic_string->index}}</label>
              @if ($dynamic_string->type == 'finder')
                {!! Form::finder($dynamic_string->index, $dynamic_string->value, ['class' => 'form-control']) !!}
              @elseif ($dynamic_string->type == 'textarea')
                {!! Form::textarea($dynamic_string->index, $dynamic_string->value, ['class' => 'form-control', 'rows' => 2]) !!}
              @elseif ($dynamic_string->type == 'editor')
                {!! Form::textarea($dynamic_string->index, $dynamic_string->value, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
              @elseif ($dynamic_string->type == 'booleon')
                {!! Form::select($dynamic_string->index, [1 => @trans('_.True'), 0 => @trans('_.False')], $dynamic_string->value, ['class' => 'form-control']) !!}
              @elseif ($dynamic_string->type == 'map')
                {!! Form::map($dynamic_string->index, $dynamic_string->value, ['class' => 'form-control']) !!}
              @else
                {!! Form::text($dynamic_string->index, $dynamic_string->value, ['class' => 'form-control']) !!}
              @endif
            </div>
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