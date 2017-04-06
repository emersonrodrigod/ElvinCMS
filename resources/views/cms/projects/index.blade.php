@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::choice('cms_nav.Projects', 2)}}
        @include('cms.includes.notes.headerIndex')
      </h1>
      {!! Breadcrumbs::render('admin-projects') !!}    
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <!--
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            /.box-header -->
            <div class="box-body">
              <table id="data-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>@lang('cms_projects.Title')</th>
                    <th>@lang('cms_projects.Text')</th>
                    <th>@lang('_.Action')</th>
                  </tr>
                </thead>
                <tbody>

                  @if ( $items->count() )
                    @foreach($items as $i)
                      <tr class="row-{{$i->id}}">
                        <td>{{$i->title}}</td>
                        <td>{{strip_tags($i->text)}}</td>
                        <td>
                          @include('cms.includes.button.tableEdit')
                          @include('cms.includes.button.tableDelete')
                        </td>
                      </tr>
                    @endforeach
                  @endif
                  
                </tbody>
                <!--
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
                -->
              </table>
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
@endsection