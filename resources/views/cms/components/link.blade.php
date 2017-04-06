<script type="text/javascript">
$(function() {
  $('.url').on('keypress', function () {
    $(this).next('.hidden').removeClass('hidden');

    var input = $(this).val();
    
    var data = {
      input: input
    }
    
    //console.log(data);

    if (input.length > 2) {
      $.ajax({
        type: 'POST',
        url: '/admin/menu-items/list-all-items',
        data: data,
        dataType: "html",
        success: function(r){
          
          var r = JSON.parse(r);
          console.log(r);
          
          $('.url-results div ul').html('');

          $.each(r.pages, function( index, value ) {
            $('.url-results div ul').prepend('<li class="url-result url-result-hide" data-name="{{$name}}" data-link="/pages/' + value.id +'/' + value.slug+'">'+value.title+'</li>')
          });

          $.each(r.posts, function( index, value ) {
            $('.url-results div ul').prepend('<li class="url-result url-result-hide" data-name="{{$name}}" data-link="/post/' + value.id +'/' + value.slug+'">'+value.title+'</li>')
          });

          $.each(r.categories, function( index, value ) {
            $('.url-results div ul').prepend('<li class="url-result url-result-hide" data-name="{{$name}}" data-link="/category/' + value.id + '/' + value.slug+'">'+value.title+'</li>')
          });
          
          $('.url-result').on('click', function () {
            var name = $(this).data('name');
            var link = $(this).data('link');

            $(this).parent().parent().parent().parent().prev('.url').val(link);
          });

          $('.url-result-hide').on('click', function () {
            $(this).parent().parent().parent().parent().addClass('hidden');
          });
        },
        error: function(){
          console.log('Error');
        }
      });
    }

  });
  
  $('.url-hide').on('click', function () {
    $(this).parent().parent().parent().parent().parent().parent().addClass('hidden');
  });

});
</script>
<div class="form-group open-wrapper">
  <label>@lang('_.URL')</label>
  {!! Form::text($name, $value, ['class' => 'form-control url', 'autocomplete' => 'off']) !!}
  <div class="open-input url-results hidden">
    <div class="box box-primary">
      
      <div class="width-240">
        <p><strong>URL <a href="javascript:;" class="text-muted pull-right"><i class="fa fa-remove url-hide"></i></a></strong></p>
        <ul class="list-unstyled"><li class="url-result-empty">@lang('cms_components.Please write more')...</li></ul>
        <!-- nav-tabs-custom -->
      </div>

    </div>
  </div>
</div>