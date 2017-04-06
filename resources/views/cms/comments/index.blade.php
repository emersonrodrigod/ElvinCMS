@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::choice('cms_nav.Comments', 2)}}
        @include('cms.includes.notes.headerIndex')
      </h1>
      {!! Breadcrumbs::render('admin-comments') !!}    
    </section>

    <!-- Main content -->
    <section class="content hidden-animation hidden"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
           
            <div class="box-body">
              <table id="data-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>@lang('cms_comments.Person')</th>
                    <th>@lang('cms_comments.Text')</th>
                    <th>@lang('cms_comments.Is Approved')</th>
                    <th>@lang('_.Action')</th>
                  </tr>
                </thead>
                <tbody>

                  @if ( $items->count() )
                    @foreach($items as $i)
                      <tr class="row-{{$i->id}}">
                        <td>{{$i->person}}</td>
                        <td>{{strip_tags($i->text)}}</td>
                        <td>@if ($i->is_approved) @lang('_.True') @else @lang('_.False') @endif </td>
                        <td>
                          @include('cms.includes.button.tableEdit')
                          @include('cms.includes.button.tableDelete')
                        </td>
                      </tr>
                    @endforeach
                  @endif
                  
                </tbody>
               
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