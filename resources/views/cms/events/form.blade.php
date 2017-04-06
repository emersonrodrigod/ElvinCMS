<div class="box-body">         
  <div class="form-group">
    <label>@lang('cms_events.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_events.Summary')</label>
    {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_events.Text')</label>
    {!! Form::textarea('text', null, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_events.Image')</label>
    {!! Form::finder('image', $event->image, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_events.Date')</label>
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
    <script type="text/javascript">
      $('input[name=date]').on('click', function() {
        $(this).pickadate();
      });
    </script>
  </div>
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>
</div>