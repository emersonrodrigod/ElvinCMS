<div class="box-body">         
  <div class="col-md-9">
    <div class="form-group">
      <label>@lang('cms_posts.Title')</label>
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
      <label>@lang('cms_posts.Summary')</label>
      {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <label>@lang('cms_posts.Text')</label>
      {!! Form::textarea('text', null, ['class'=>'ckeditor', 'id'=>'ckeditor']) !!}
    </div>

    <div class="form-group">
      <label>@lang('cms_posts.Image')</label>
      {!! Form::finder('image', $post->image, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label>{{Lang::choice('cms_nav.Category', 2)}}</label>
      {!! Form::select('category_list[]', $categories, null, ['multiple'=>'multiple', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <label>@lang('cms_posts.Tags')</label>
      {!! Form::select('tag_list[]', $tags, null, ['multiple'=>'multiple', 'class' => 'form-control select2', 'style'=>'width:100%']) !!}
    </div>

    <div class="form-group">
      <label>{{Lang::choice('cms_nav.Slide', 1)}}</label>
      {!! Form::select('slide', $slides, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      <label>{{Lang::choice('cms_posts.Video Embed Code', 1)}}</label>
      {!! Form::textarea('video', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group" id="vue_post">
      <i class="fa fa-calendar"></i> @lang('cms_posts.Publish') <strong>{{$post->published_at}}</strong> 
      <a href="javascript:;" class="btn btn-default btn-xs btn-publish-at" @click="toggle_text" v-text="button_text"></a>
      <input type="text" name="published_at" :class="hide_text" class="form-control" value="{{$post->published_at}}" onclick="$(this).pickadate()">
    </div>

    <div class="box-footer">
      {!! Form::submit($submit_text, ['class' => 'btn btn-primary pull-right']) !!}
    </div>
  
  </div>

  
</div>