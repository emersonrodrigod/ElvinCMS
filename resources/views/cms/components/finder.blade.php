<script type="text/javascript">
  // CK editör
  function BrowseServer(startupPath, e)
  {
    // You can use the "CKFinder" class to render CKFinder in a page:
    var finder = new CKFinder();
    // The path for the installation of CKFinder (default = "/ckfinder/").
    finder.basePath = '../';
    // Startup path in a form: "Type:/path/to/directory/"
    finder.startupPath = startupPath;
    // Name of a function which is called when a file is selected in CKFinder.
    finder.selectActionFunction = SetFileField;
    // Additional data to be passed to the selectActionFunction in a second argument.
    // We'll use this feature to pass the Id of a field that will be updated.
    finder.selectActionData = e;
    // Name of a function which is called when a thumbnail is selected in CKFinder.
    // finder.selectThumbnailActionFunction = ShowThumbnails;
    // Launch CKFinder
    finder.popup();
  }
  // This is a sample function which is called when a file is selected in CKFinder.
  function SetFileField(fileUrl, data)
  {

    var sFileName = this.getSelectedFile().name;
    var sFileFolder = this.getSelectedFile().folder;
    text = sFileFolder+sFileName;
    text = text.substr(1);
    document.getElementById(data["selectActionData"] ).value = text;

    $('#{{$name}}-thumbnail').html('<img class="img-responsive" src="'+fileUrl+'">');
  }
  // This function clears the input field
  function CleanFileField(e){
    console.log(e);
    $('#'+e).val('');
    $('#'+e+'-thumbnail').html('');
  }

</script> 

<div class="row">
  <div class="col-md-3 col-sm-12">   
    <div id="{{$name}}-thumbnail" class="finder-thumbnail">
      @if ($value)
        @if(starts_with($value, 'http'))
          <img class="img-responsive" src="{{$value}}">
        @else
          <img class="img-responsive" src="/data/_images/{{$value}}">
        @endif
      @endif
    </div>
  </div>
</div>
<div class="input-group">
  <div class="input-group-addon btn-finder" onclick="BrowseServer('Images:/', '{{$name}}');">
    <a>@lang('cms_components.Choose a file')</a>
  </div>
  {{ Form::text($name, $value, array_merge(['class' => 'form-control', 'id'=> $name], $attributes)) }}
  <div class="input-group-addon btn-finder" onclick="CleanFileField('{{$name}}')">
    <a>@lang('cms_components.Do not use')</a>
  </div>
</div>