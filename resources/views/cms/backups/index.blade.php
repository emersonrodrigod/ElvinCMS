@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::choice('cms_nav.Backup', 2)}}
      </h1>
      {!! Breadcrumbs::render('admin-backups') !!}
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body">  
              <div id="alert"></div>
              <p>@lang('cms_backups.We are taking automatic backups daily however you may take backups whenever you want').</p>
              <a href="database" class="btn btn-default"><i class="fa fa-database"></i> @lang('cms_backups.Only database')</a>
              @if (Auth::user()->role->name == 'developer')
              <a href="files" class="btn btn-default"><i class="fa fa-copy"></i> @lang('cms_backups.Only files')</a>
              <a href="full" class="btn btn-primary"><i class="fa fa-book"></i> @lang('cms_backups.Full backup')</a>
              <a href="clear" class="btn btn-danger"><i class="fa fa-trash"></i> @lang('cms_backups.Clear all backups')</a>
              @endif
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    $('.btn').on('click', function(e) {
      e.preventDefault();

      var type = $(this).attr('href');

      $.ajax({
        type: 'POST',
        url: 'backups/take/'+type,
        data: {type: type},
        dataType: "html",
        success: function(r){
          console.log(r);
          $('#alert').html('<div class="alert alert-success">Success</div>');

        },
      }); 
    })
  </script>
@endsection