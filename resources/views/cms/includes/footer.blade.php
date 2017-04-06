<!-- DataTables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<!-- end of DataTables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.3.5/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/picker.js"></script>

<script src="/cms/plugins/jQueryUI/jquery-nested-sortable.js"></script>   
<script src="/cms/plugins/pickadate/compressed/picker.date.js"></script>
<script src="/cms/js/main.js"></script>
<script src="/cms/js/pages/dashboard.js"></script>

<!-- webpack mix file -->
<script src="{{ mix('js/app.js') }}"></script>


<script>
  $(function () {
    if ($('#data-table').length > 0) {
      $('#data-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "dom": 'lBfrtip',
        "buttons": [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ],
        "language": {
          "url": "{{ url('cms/plugins/datatables/'. Session::get('lang') .'.json')}}"
        }
      });
    }
  });
</script>

<?php if (Session::get('lang') == 'tr') { ?>
<script>
  $(function () {
    $.extend($.fn.pickadate.defaults, {
      monthsFull: [ 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık' ],
      monthsShort: [ 'Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara' ],
      weekdaysFull: [ 'Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi' ],
      weekdaysShort: [ 'Pzr', 'Pzt', 'Sal', 'Çrş', 'Prş', 'Cum', 'Cmt' ],
      today: 'Bugün',
      //clear: 'Sil',
      clear: 'Temizle',
      close: 'Kapat',
    });
  });
</script>
<?php } ?>
<script type="text/javascript">
  /*
   * GLOBAL DATA MANUPULATION
   * ------------------------
   * 
   */
  $(function () {

    'use strict';

    //Initialize Select2 Elements
    $(".select2").select2();
    
    /* UPDATE
     * ------ 
     *
     * It generates href from url so no need
     * to write anything into plain html
     *
     */
    $('.update').attr('href', function() {
      return window.location.href+'/'+$(this).data('id')+'/edit';
    })
    
    /* DESTROY 
     * -------
     *
     * If an element has a "table data" it will 
     * erase data from this table. Otherwise,
     * it will get table name from url. 
     *
     * @usage $(".destroy").click()
     */
    $('.destroy').on('click',function () {
      
      // data id
      var id = $(this).data('id');
      // data table
      if ($(this).data('table') == null) {
        var pathname = window.location.pathname;
        var table = pathname.split('/admin/')[1];
      } else {
        var table = $(this).data('table');
      }
      // refresh page after all
      var refresh = false;
      if ($(this).hasClass('refresh')) {
        refresh = true;
      }

      swal({
        title: "{{Lang::get('cms.Are you sure?')}}",
        text: "{{Lang::get('cms.You won\'t be able to revert this!')}}",
        type: 'warning',
        showCancelButton: true,
        //confirmButtonColor: '#3085d6',
        //cancelButtonColor: '#d33',
        confirmButtonText: "{{lang::get('cms.Yes, delete it!')}}"
      }).then(function() {      

        var data = {
          id: id
        }
        
        $.ajax({
          type: 'POST',
          url: table+'/destroy',
          data: data,
          dataType: "html",
          success: function(r){
            if (r) {
              console.log(r);
            }

            $('.row-'+id).remove();
          },
          error: function(){
            console.log('Error');
          }
        });

        swal(
          "{{Lang::get('cms.Deleted!')}}",
          "{{Lang::get('cms.Item has been deleted.')}}",
          'success'
        );

        // refresh page
        if (refresh)
          location.reload();
      });

    });   

  });



  /* PRELOADER
   * --------- 
   *
   */
  $(window).on('load',function() {
    $("#preloader").fadeOut(600);
    $('.hidden-animation').addClass('animated fadeInUp').removeClass('hidden');
  });
</script>