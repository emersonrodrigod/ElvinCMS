@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
          @if ($slide->slide_items->count())
            @foreach ($slide->slide_items as $item)
                <div class="col-md-3 box-photo row-{{$item->id}}">
                  <div class="destroy" data-id="{{$item->id}}" data-table="/admin/slide-items"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></div>
                    @foreach ($item->slide_item_details as $d)
                      <div class="caption"><span class="label label-default"><img class="flag flag-xs" src="/cms/img/flags/{{Session::get('lang')}}.png"> {{$d->caption}}</span></div>
                    @endforeach 
                    @if(starts_with($item->image, 'http'))
                      <img class="img-responsive" src="{{$item->image}}">
                    @else                    
                      <img class="img-responsive" src="/data/_images/{{$item->image}}">
                    @endif
                </div>
            @endforeach
            <div class="col-md-3 box-photo" onClick="$('html, body').animate({scrollTop: $('#add-item').offset().top}, 1000);">
              <div class="caption"><span class="label label-default"></span></div>
              <img class="img-responsive" src="/cms/img/plus.jpg">
            </div>
          @else
            <!--
            <div class="col-md-12">
              @lang('cms_slides.There isn\'t any image or video in') {{$slide->title}}
            </div>
            -->
            <div class="col-md-3 box-photo" onClick="$('html, body').animate({scrollTop: $('#add-item').offset().top}, 1000);">
              <div class="caption"><span class="label label-default"></span></div>
              <img class="img-responsive" src="/cms/img/plus.jpg">
            </div>
          @endif
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
          <div class="form-group">
            <label>@lang('cms_slides.Select an image or video')</label>
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
                    <label>@lang('cms_slides.Title')</label>
                    {!! Form::text('caption[]', null, ['class' => 'form-control', 'rel'=> $key]) !!}
                  </div>
                  <div class="form-group">      
                    <label>@lang('cms_slides.Link')</label>        
                    {!! Form::text('link[]', null, ['class' => 'form-control', 'rel'=> $key]) !!}
                  </div>
                </div>
              @endforeach
            </div>
          @else
            <div class="form-group">
              <label>@lang('cms_slides.Title')</label>
              {!! Form::text('caption[]', null, ['class' => 'form-control', 'rel'=> Session::get('lang')]) !!}
            </div>
            <div class="form-group">      
              <label>@lang('cms_slides.Link')</label>        
              {!! Form::text('link[]', null, ['class' => 'form-control', 'rel'=> Session::get('lang')]) !!}
            </div>
          @endif
          <div class="box-footer">
            <input type="submit" value="{{@trans('Add to slide')}}" class="btn btn-primary" id="add-to-slide" data-slide-id="{{$slide->id}}">
          </div>
          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $(function() {

      $('#add-to-slide').on('click', function() {
        var id = $(this).data('slide-id');
        var item = $('#finder-1').val();
        
        var caption = {};
        $('input[name="caption\\[\\]"]').each(function(){
           caption[$(this).attr('rel')] = $(this).val();
        });
        
        var link = {};
        $('input[name="link\\[\\]"]').each(function(){
           link[$(this).attr('rel')] = $(this).val();
        });
        
        var data = {
          slide_id: id,
          image: item,
          caption: caption,
          link: link,
          order: 0
        }
        
        if (item.length > 0) {
          $.ajax({
            type: 'POST',
            url: '/admin/slide-items/add-new',
            data: data,
            dataType: "html",
            success: function(r){
              
              var r = JSON.parse(r);
              var r1 = r[0];
              var r2 = r[1];
                            
              $('.box-photo').parent().prepend('<div class="col-md-3 box-photo row-'+r1.id+'"><div class="destroy" data-id="'+r1.id+'" data-table="/admin/slide-items"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></div><div class="caption"><span class="label label-default"><img class="flag flag-xs" src="/cms/img/flags/{{Session::get('lang')}}.png"> '+ r2 +'</span></div><img class="img-responsive" src="/data/_images/'+r1.image+'"></div>');
              
              $('#finder-1').val('');
              $('#finder-1-thumbnail').html('');
              //$('input[name="caption\\[\\]"]').val('');
              //$('input[name="link\\[\\]"]').val('');

              // Destroy project 
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
                    '{{lang::get('cms.Deleted!')}}',
                    '{{lang::get('cms.Item has been deleted.')}}',
                    'success'
                  )
                });
              });
            
            },
            
          });
        }
      });

    });
  </script>
@endsection