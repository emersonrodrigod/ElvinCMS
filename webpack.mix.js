const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version();
/*
  |--------------------------------------------------------------------------
  | APP PART
  |--------------------------------------------------------------------------
  |
  | Combined css & js files will be placed into app/css & app/js folder. Thus, 
  | you should place all css resources into the same folder for relatice 
  | assets. Otherwise, there might be broken links
  |
  */
  // Plaing css -HEAD
  

  /*
  |--------------------------------------------------------------------------
  | CMS PART
  |--------------------------------------------------------------------------
  |
  | Combined css & js files will be placed into cms/css & cms/js folder. Thus, 
  | you should place all css resources into the same folder for relatice 
  | assets. Otherwise, there might be broken links
  |
  
*/
  mix.combine([
      'public/cms/css/AdminLTE.css',
      'public/cms/css/skin.css',
      'public/cms/css/animate.css',
      'public/cms/plugins/select2/select2.css',
      'public/cms/plugins/datatables/dataTables.bootstrap.css',
      'public/cms/plugins/iCheck/flat/blue.css',
      'public/cms/plugins/datepicker/datepicker3.css',
      'public/cms/plugins/daterangepicker/daterangepicker.css',
      'public/cms/plugins/sweetalert2/sweetalert2.css',
      'public/cms/plugins/pickadate/compressed/themes/default.css',
      'public/cms/plugins/pickadate/compressed/themes/default.date.css'
      ],'public/cms/css/all.css');

/*
  
  // Js scripts - FOOTER  
  mix.js([  
    'public/cms/plugins/sweetalert2/sweetalert2.min.js',
    'public/cms/plugins/jQueryUI/jquery-nested-sortable.js',   
    'public/cms/plugins/select2/select2.full.min.js',
    'public/cms/plugins/sparkline/jquery.sparkline.min.js',
    'public/cms/plugins/moment/moment.min.js',
    'public/cms/plugins/daterangepicker/daterangepicker.js',
    'public/cms/plugins/datepicker/bootstrap-datepicker.js',
    'public/cms/plugins/slimScroll/jquery.slimscroll.min.js',
    'public/cms/plugins/fastclick/fastclick.js',    
    'public/cms/plugins/pickadate/compressed/picker.js',
    'public/cms/plugins/pickadate/compressed/picker.date.js',
    'public/cms/js/main.js',
    'public/cms/js/pages/dashboard.js'
  ], 'public/cms/js/footer.js');

*/


  
