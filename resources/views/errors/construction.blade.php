@extends('layouts.error')

@section('content')
<div class="login-box box-lg">
  <div class="login-logo">
    <a href="/"><b>{{config('app.name')}}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="container">  
    <div class="col-md-6 col-md-offset-3 text-center header-icons">

      <!-- Email -->
      <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="email" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="email">@lang('errors.Send a message')</h4>
            </div>
            <form id="mailto">
              <div class="modal-body text-left">
                <div id="mailto-message"></div>
                <div class="form-group">
                  <label>@lang('cms.Email')</label>
                  {!! Form::text('emailFrom', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  <label>@lang('cms.Subject')</label>
                  {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  <label>@lang('cms.Text')</label>
                  {!! Form::textarea('text', null, ['class' => 'form-control', 'rows' => 7]) !!}
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="@lang('_.Submit')" id="mailto-button"/>
                <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('_.Close')</button>
              </div>
            </form> 
          </div>
        </div>
      </div>
      <a href="#" data-toggle="modal" data-target="#email"><i class="fa fa-envelope"></i></a>

      <!-- About -->
      <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="about">@lang('errors.About us')</h4>
            </div>
            <div class="modal-body text-left">
              @lang('About us text')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('_.Close')</button>
            </div>
          </div>
        </div>
      </div>
      <a href="#" data-toggle="modal" data-target="#about"><i class="fa fa-commenting"></i></a>

      <!-- Location -->
      <div class="modal fade" id="location" tabindex="-1" role="dialog" aria-labelledby="location" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="location">@lang('errors.Location')</h4>
            </div>
            <div class="modal-body">
              <div style="width: 100%; height: 400px;">
                {!! Mapper::render() !!}
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('_.Close')</button>
            </div>
          </div>
        </div>
      </div>
      <a href="#" data-toggle="modal" data-target="#location"><i class="fa fa-map-marker"></i></a>
    </div>
    
    <div class="col-md-6 text-right">
      <h1>@lang('_.Construction mode')</h1>
      <h4>@lang('_.OUR WEBSITE IS COMING SOON')</h4>   
      <p>@lang('_.Construction text')</p> 
      
      <!--
      <h4>@lang('_.LEAVE YOUR EMAIL TO GET NEWS')</h4>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">@lang('_.Subscribe')</button>
        </span>
      </div>
      -->
    </div>
    <div class="col-md-6">
      <br><br>
      <h4>@lang('_.TIME REMAINING TO LUNCH'):</h4>
      <div class="row">
      <div id="countdown" class="countdown"></div>
      </div>
    </div>
    <div class="col-md-6">
      <h4>@lang('_.STAY SOCIAL WITH US'):</h4>
      <div class="social-icons">
        @include('includes.socialmedia')
      </div>
    </div>   
  </div>
</div>
<script type="text/javascript">
  $(function() {
    /*
     * ADD email & password TO THE FORM FOR DEMO
     * -----------------------------------------
     *
     */
    if(document.URL == 'http://demo.guncebektas.com/login') {
      $('#email').val('demo@guncebektas.com');
      $('#password').val('demo');
    }

    /*
     * COUNTDOWN
     * ---------
     *
     */
    var newYear = new Date(); 
    newYear = new Date(newYear.getFullYear() + 1, 1 - 1, 1); 
    $('#countdown').countdown({until: newYear}); 

    /*
     * GOOGLE MAP
     * ----------
     *
     */
    $('#location').on('shown.bs.modal', function () {
      initialize_0();
    });
  });
</script>
@endsection
