<div class="box-body">         
  <div class="form-group">
    <label>@lang('cms_projects.Title')</label>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_projects.Text')</label>
    {!! Form::textarea('text', null, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_projects.Status')</label>
    {!! Form::select('status', ['planning' => @trans('_.planning'), 'pending' => @trans('_.pending'), 'completed' => @trans('_.completed')], $project->status, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <label>@lang('cms_projects.Date')</label>
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