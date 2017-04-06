@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
    <section class="content hidden-animation hidden" id="gallery-items">
      <div class="box box-primary">
        <div class="box-body">  

            <gallery-items gallery_id="{{$gallery->id}}" lang ="{{Session::get('lang')}}"></gallery-items>
                  
        </div>
      </div>
    </section>

    <!-- Content Header (Page header) -->
    <section class="content-header" id="add-item">
      <h1>
        @lang('cms_galleries.Add New Item') {{$gallery->title}}
      </h1>
    </section>

    <!-- Main content -->
     <section class="content" id="gallery-form">    
      <div class="box box-primary">
        <div class="box-body">  
          <div class="form-group">
            <label>@lang('cms_galleries.Select an image or video')</label>
            {!! Form::finder('finder-1', null, ['class' => 'form-control']) !!}
          </div>

          @if ($settings['Multi_language'])
            <ul class="nav nav-tabs" role="tablist">
              @foreach ($languages AS $key=>$lang)
                @if ($key == Session::get('lang'))
                  <li role="presentation" class="active"><a href="#{{$key}}" aria-controls="home" role="tab" data-toggle="tab"><img class="flag" src="/cms/img/flags/{{$key}}.png"> {{$lang}}</a></li>
                @else
                  @if (config('settings.Multi_language'))
                    <li role="presentation"><a href="#{{$key}}" aria-controls="home" role="tab" data-toggle="tab"><img class="flag" src="/cms/img/flags/{{$key}}.png"> {{$lang}}</a></li>
                  @endif
                @endif
              @endforeach
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              @foreach ($languages AS $key=>$lang)
                @if ($key == Session::get('lang'))
                  <div role="tabpanel" class="tab-pane active" id="{{$key}}">
                @else
                  <div role="tabpanel" class="tab-pane" id="{{$key}}">
                @endif
                  <div class="form-group">
                    <label>@lang('cms_galleries.Caption')</label>
                    {!! Form::text('caption[]', null, ['class' => 'form-control', 'rel'=> $key]) !!}
                  </div>
                </div>
              @endforeach
            </div>
          @else
            <div class="form-group">
              <label>@lang('cms_galleries.Caption')</label>
              {!! Form::text('caption[]', null, ['class' => 'form-control', 'rel'=> Session::get('lang')]) !!}
            </div>
          @endif
          <div class="box-footer">
            <input type="submit" value="{{@trans('Add to gallery')}}" class="btn btn-primary" id="add-to-gallery" data-gallery-id="{{$gallery->id}}" @click="submitForm">
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $(function() {
      $('#add-to-gallery').on('click', function() {
        var id = $(this).data('gallery-id');
        var item = $('#finder-1').val();
        
        var caption = {};
        $('input[name="caption\\[\\]"]').each(function(){
           caption[$(this).attr('rel')] = $(this).val();
        });

        var data = {
          gallery_id: id,
          image: item,
          caption: caption,
          order: 0
        }
        
        if (item.length > 0) {
          $.ajax({
            type: 'POST',
            url: '/admin/gallery-items/add-new',
            data: data,
            dataType: "html",
            success: function(r){
              
              var r = JSON.parse(r);
              var r1 = r[0];
              var r2 = r[1];
              
              
             $('.box-photo').parent().prepend('<div class="col-md-3 box-photo row-'+r1.id+'"><div class="destroy" data-id="'+r1.id+'" data-table="/admin/gallery-items"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></div><div class="caption"><span class="label label-default"><img class="flag flag-xs" src="/cms/img/flags/{{Session::get('lang')}}.png"> '+r2+'</span></div><img class="img-responsive" src="/data/_images/'+r1.image+'"></div>');
            
              $('#finder-1').val('');
              $('#finder-1-thumbnail').html('');
              $('input[name="caption\\[\\]"]').val('');


              /* Destroy project */
              $('.destroy').on('click',function () {
                
                var id = $(this).data('id');
                var table = $(this).data('table');
                  
                swal({
                  title: "{{lang::get('cms.Are you sure?')}}",
                  text: "{{lang::get('cms.You won\'t be able to revert this!')}}",
                  type: 'warning',
                  showCancelButton: true,
                  //confirmButtonColor: '#3085d6',
                  //cancelButtonColor: '#d33',
                  confirmButtonText: "{{lang::get('cms.Yes, delete it!')}}"
                }).then(function() {      

                  var data = {
                    id: id
                  }
                  
                  $.ajax({
                    type: 'POST',
                    url: table+'/destroy',
                    data: data,
                    dataType: "html",
                    success: function(){
                      $('.row-'+id).remove();
                    },
                    error: function(){
                      console.log('Error');
                    }
                  });

                  swal(
                    "{{lang::get('cms.Deleted!')}}",
                    "{{lang::get('cms.Item has been deleted.')}}",
                    'success'
                  )
                });
              });
            },
            
            error: function(){
              console.log('Error');
            }
          });
        }
      });
    });
  </script>
@endsection