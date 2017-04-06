<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="_token" content="{!! csrf_token() !!}">
<meta charset="utf-8">
<title>CMS | Dashboard</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="/cms/js/ckeditor/ckeditor.js"></script>
<script src="/cms/js/ckfinder/ckfinder.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);

  $.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  });
</script>
<script type="text/javascript">
// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
  document.write(
    '<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
    'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
    'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
    'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
    'value (line 32).' ) ;
}
else
{
  CKFinder.setupCKEditor( null, '/cms/js') ;
}
</script>

<!-- use trans() in vue files -->
<script>
    window.trans = <?php
    // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
    $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
    $trans = [];
    foreach ($lang_files as $f) {
        $filename = pathinfo($f)['filename'];
        $trans[$filename] = trans($filename);
    }
    echo json_encode($trans);
    ?>;
</script>

