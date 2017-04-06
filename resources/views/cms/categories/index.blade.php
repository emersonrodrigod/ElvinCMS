@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::choice('cms_nav.Category', 2)}}
        @include('cms.includes.notes.headerIndex')
      </h1>
      {!! Breadcrumbs::render('admin-categories') !!}
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
                    <th>@lang('cms_categories.Title')</th>
                    <th>@lang('_.Action')</th>
                  </tr>
                </thead>
                <tbody>
                @if ( $items->count() )
                  @foreach($items as $i)
                    <tr class="row-{{$i->id}}">
                      <td>{{$i->title}}</td>
                      <td>
                        @include('cms.includes.button.tableEdit')
                        @include('cms.includes.button.tableDeleteAndRefresh')
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

    @if ( $items->count() > 1)
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @lang('cms_categories.Sort categories with drag & drop')
        </h1>
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
                
                <ol class="sortable" data-table="categories" data-max-levels="2">
                @foreach($items as $i)
                  
                  @if($i->parent_id == 0)  
                    <li id="list-{{$i->id}}" class="row-{{$i->id}}"><div>{{$i->title}}</div></li>
                  @else
                    <ol>
                      <li id="list-{{$i->id}}" class="row-{{$i->id}}"><div>{{$i->title}}</div>
                        <ol>
                        @foreach($items as $c)  
                          @if($c->parent_id == $i->id)  
                            <li id="list-{{$c->id}}" class="row-{{$c->id}}"><div>{{$c->title}}</div></li>
                          @endif
                        @endforeach
                        </ol>
                      </li>
                    </ol>
                  @endif

                @endforeach
                </ol> 

                <div class="box-footer">      
                  <button class="btn btn-primary" id="serialize">@lang('_.Sort')</button>
                </div>
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
    @endif
  </div>
  <!-- /.content-wrapper -->
@endsection