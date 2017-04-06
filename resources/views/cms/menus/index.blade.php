@extends('layouts.cms')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{Lang::choice('cms_nav.Menu Item', 2)}}
        @include('cms.includes.notes.headerIndex')
      </h1>
      {!! Breadcrumbs::render('admin-menus') !!}
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
                    <th>@lang('cms_menus.Name')</th>
                    <th>@lang('cms_menus.Link')</th>
                    <th>@lang('_.Action')</th>
                  </tr>
                </thead>
                <tbody>
                @if ( $items->count() )
                  @foreach($items as $i)
                    <tr class="row-{{$i->id}}">
                      <td>{{$i->name}}</td>
                      <td>{{$i->link}}</td>
                      <td>
                      @include('cms.includes.button.tableEdit')
                      @if ($i->is_erasable == "1" || Auth::user()->role->name == 'developer')
						<button class="btn btn-xs btn-danger destroy refresh" data-id="{{$i->id}}" data-table="menus"><i class="fa fa-trash"></i></button>
					  @endif
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
          @lang('cms_menus.Sort items with drag & drop')
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
                <ol class="sortable" data-table="menus" data-max-levels="2">
                @foreach($items as $i)
                  
                  @if($i->parent_id == 0)  
                    <li id="list-{{$i->id}}" class="row-{{$i->id}}"><div>{{$i->name}}</div><ol>
                  
                    
                        @foreach($items as $c)  
                          @if($c->parent_id == $i->id)  
                          	<li id="list-{{$c->id}}" class="row-{{$c->id}}">
                              <div>{{$c->name}}</div>
                            </li>
                          @endif
                        @endforeach
                        
                    </ol></li>                
                  @endif
				  
                @endforeach
                </ol>
                <button class="btn btn-primary" id="serialize">@lang('_.Sort')</button>
              </div>
             <div id="sort-success" class="alert alert-success">@lang('cms_menus.Sorted successfully.')</div>
            <div id="sort-error" class="alert alert-warning">@lang('cms_menus.An error occurred. Please try again!')</div> 
              
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