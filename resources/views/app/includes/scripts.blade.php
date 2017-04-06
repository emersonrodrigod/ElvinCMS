 <!-- jQuery -->
<script src="/app/vendor/jquery/jquery.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="/app/js/jqBootstrapValidation.js"></script>
<script src="/app/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="/app/js/clean-blog.min.js"></script>

<!-- webpack mix file -->
<script src="{{ mix('js/app.js') }}"></script>

<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});


</script>