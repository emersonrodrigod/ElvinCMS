@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @lang('cms_nav.Logs')
        <a class="btn btn-default" href="?dl={{ base64_encode($current_file) }}"><i class="fa fa-download"></i> @lang('_.Download')</a>
        <a class="btn btn-danger" id="delete-log" href="?del={{ base64_encode($current_file) }}"><i class="fa fa-trash"></i> @lang('_.Delete')</a>
      </h1>
      {!! Breadcrumbs::render('admin-logs') !!}
    </section>

    

    <!-- Main content -->
    <section class="content"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <!--
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            /.box-header -->
            <div class="box-body">
              <ul>
              @foreach($files as $file)
                <li @if ($current_file == $file) active @endif><a href="?l={{ base64_encode($file) }}">{{$file}}</a></li>
              @endforeach  
              </ul>
              @if ($logs === null)
                <div class="alert alert-warning">
                  @lang('cms_logs.Log file is bigger than we thought, please download it', ['megabyte' => 50]).
                </div>
              @else
                <table id="data-table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>@lang('cms_logs.Level')</th>
                      <th>@lang('cms_logs.Context')</th>
                      <th>@lang('cms_logs.Date')</th>
                      <th>@lang('cms_logs.Content')</th>
                      <th>@lang('_.Action')</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($logs as $key => $log)
                    <tr>
                      <td class="text-{{{$log['level_class']}}}"><span class="fa fa-{{{$log['level_img']}}}" aria-hidden="true"></span> &nbsp;{{$log['level']}}</td>
                      <td>{{$log['context']}}</td>
                      <td>{{{$log['date']}}}</td>
                      <td>
                        {{{$log['text']}}}
                        @if (isset($log['in_file'])) <br />{{{$log['in_file']}}}@endif
                        @if ($log['stack']) 
                          <div class="hidden" id="stack{{{$key}}}">{{{ trim($log['stack']) }}}</div>
                        @endif
                      </td>
                      <td>@if ($log['stack']) <a class="btn btn-xs btn-primary btn-expand-log-details" data-display="stack{{{$key}}}"><i class="fa fa-search"></i> </a>@endif</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              @endif
            </div>
            <!-- /.box-body -->
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

  <script>
    $(function() {
      /*
      $('#data-table').DataTable({
        "order": [ 1, 'desc' ],
        "stateSave": true,
        "stateSaveCallback": function (settings, data) {
          window.localStorage.setItem("datatable", JSON.stringify(data));
        },
        "stateLoadCallback": function (settings) {
          var data = JSON.parse(window.localStorage.getItem("datatable"));
          if (data) data.start = 0;
          return data;
        }
      });
      */
      $('.btn-expand-log-details').on('click', function(){
        $('#' + $(this).data('display')).toggleClass('hidden', 'show');
      });
      $('#delete-log').click(function(){
        //return confirm('Are you sure?');
        
        swal({
          title: "{{Lang::get('cms.Are you sure?')}}",
          text: "{{Lang::get('cms.You won\'t be able to revert this!')}}",
          type: 'warning',
          showCancelButton: true,
          //confirmButtonColor: '#3085d6',
          //cancelButtonColor: '#d33',
          confirmButtonText: "{{lang::get('cms.Yes, delete it!')}}",
        }, function(isConfirm){
          if (isConfirm) {
            window.location.href = "logs?del={{ base64_encode($current_file) }}";
          } else {
            window.location.href = "logs?del={{ base64_encode($current_file) }}";
          }
        });
        
      });
    });
  </script>


@endsection
          
    