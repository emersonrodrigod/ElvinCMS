<div class="box-body">         
  
  	<div class="form-group">
    	<label>@lang('cms_menus.Name')</label>
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
 	</div>
  	<div class="form-group" id="menu-search">
		<label>@lang('_.URL')</label>
    	<menu-search menu="{{$menu}}"></menu-search>
	</div>
    
  <div class="box-footer">
    {!! Form::submit($submit_text, ['class' => 'btn btn-primary']) !!}
  </div>

</div>