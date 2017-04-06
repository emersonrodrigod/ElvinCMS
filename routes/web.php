<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * These are core routes
 *
 *
 */

Auth::routes();

Route::get('lang/{lang}','LanguageController@index');

/* mail routes */

Route::post('mailto', 'MailtoController@send')->name('admin.contactForm');;

Route::post('contactForm', 'MailtoController@sendContactForm')->name('contactForm');

/* cms menu link search for MenuSearch.vue */

Route::get('menu/searchPages','Cms\MenuItemsController@searchPages');

Route::get('menu/searchPosts','Cms\MenuItemsController@searchPosts');

Route::get('menu/searchCategories','Cms\MenuItemsController@searchCategories');

/* cms gallery item list for GalleryItems.vue */

Route::get('gallery/{gallery}','Cms\GalleriesController@list');

/* cms add gallery item for GalleryForm.vue */

Route::post('gallery/items','Cms\GalleryItemsController@insert');

/* cms destroy gallery item for GalleryItems.vue */

Route::post('gallery/destroyItem', 'Cms\GalleryItemsController@destroy');

/* cms slide item list for SlideItems.vue */

Route::get('slide/{slide}','Cms\SlidesController@list');

/* cms add slide item for SlideForm.vue */

Route::post('slide/items','Cms\SlideItemsController@insert');

/* cms destroy slide item for SlideItems.vue */

Route::post('slide/destroyItem', 'Cms\SlideItemsController@destroy');

/* construction and maintenance pages */

Route::get('/construction','ErrorController@construction')->name('construction');

Route::get('/maintenance','ErrorController@maintenance')->name('maintenance');

Route::get('/logout', 'HomeController@logout')->name('logout');

/*
 * These are app routes
 *
 *
 */

Route::group(array('middleware' => 'ready'), function(){

  Route::get('/', 'App\HomeController@index')->name('home');

  Route::get('/posts','App\PostsController@index')->name('posts');

  Route::get('/posts/{post}/{slug}','App\PostsController@show')->name('posts.show');

  Route::get('/contact', 'App\ContactsController@index')->name('contact');

  Route::get('/about', 'App\AboutController@index')->name('about');

});


/**
 * These are admin routes
 *
 *
 */
Route::prefix('admin')->middleware('admin')-> group(function(){

  Route::get('/', 'Cms\DashboardController@index')->name('admin');

  Route::post('settings/map','Cms\SettingsController@map');
  Route::post('settings/{group}', 'Cms\SettingsController@update');
  Route::get('/settings/{group}', 'Cms\SettingsController@edit')->name('admin-settings');
  
  Route::patch('dynamic-strings','Cms\DynamicStringsController@updateAll')->name('dynamic-strings.updateAll');
  Route::resource('dynamic-strings','Cms\DynamicStringsController',['except' => ['show','store','create','destroy']]);

  Route::resource('pages', 'Cms\PagesController',['except' => ['index','destroy']]);
  Route::post('pages/destroy', 'Cms\PagesController@destroy');
  Route::get('/pages', 'Cms\PagesController@index')->name('admin-pages');

  Route::resource('posts', 'Cms\PostsController',['except' => ['index','destroy']]);
  Route::post('posts/destroy', 'Cms\PostsController@destroy');
  Route::get('/posts', 'Cms\PostsController@index')->name('admin-posts');

  Route::resource('categories', 'Cms\CategoriesController',['except' => ['index','destroy']]);
  Route::post('categories/destroy', 'Cms\CategoriesController@destroy');
  Route::post('categories/order', 'Cms\CategoriesController@order');
  Route::get('/categories','Cms\CategoriesController@index')->name('admin-categories');
  
  
  Route::resource('tags', 'Cms\TagsController',['except' => ['index', 'destroy']]);
  Route::post('tags/destroy', 'Cms\TagsController@destroy');
  Route::get('/tags','Cms\TagsController@index')->name('admin-tags');


  Route::resource('galleries', 'Cms\GalleriesController',['except' => ['index', 'destroy']]);
  Route::post('galleries/destroy', 'Cms\GalleriesController@destroy');
  Route::get('/galleries', 'Cms\GalleriesController@index')->name('admin-galleries');
  
  //Route::post('gallery-items/add-new', 'Cms\GalleryItemsController@insert');
  Route::post('gallery-items/destroy', 'Cms\GalleryItemsController@destroy');
  

  Route::resource('slides', 'Cms\SlidesController',['except' => ['index', 'destroy']]);
  Route::post('slides/destroy', 'Cms\SlidesController@destroy');
  Route::get('/slides', 'Cms\SlidesController@index')->name('admin-slides');
  
  Route::post('slide-items/add-new', 'Cms\SlideItemsController@insert');
  Route::post('slide-items/destroy', 'Cms\SlideItemsController@destroy');
  

  Route::resource('menus', 'Cms\MenuItemsController',['except' => ['index', 'destroy']]);
  Route::post('menus/destroy','Cms\MenuItemsController@destroy');
  Route::post('menus/order', 'Cms\MenuItemsController@order');
  Route::get('/menus','Cms\MenuItemsController@index')->name('admin-menus');


  Route::post('menu-items/list-all-items', 'Cms\MenuItemsController@list')->name('admin-menu-items');


  Route::resource('faqs', 'Cms\FaqsController',['except' => ['index', 'destroy']]);
  Route::post('faqs/destroy','Cms\FaqsController@destroy');
  Route::post('faqs/order', 'Cms\FaqsController@order');
  Route::get('/faqs','Cms\FaqsController@index')->name('admin-faqs');

  
  Route::resource('popup', 'Cms\PopupController',['except' => ['index']]);
  Route::get('/popup', 'Cms\PopupController@index')->name('admin-popup');
  

  Route::resource('testimonials', 'Cms\TestimonialsController',['except' => ['index', 'destroy']]);
  Route::post('testimonials/destroy', 'Cms\TestimonialsController@destroy');
  Route::get('/testimonials', 'Cms\TestimonialsController@index')->name('admin-testimonials');

  Route::resource('comments', 'Cms\CommentsController',['except' => ['index', 'destroy']]);
  Route::post('comments/destroy', 'Cms\CommentsController@destroy');
  Route::get('/comments', 'Cms\CommentsController@index')->name('admin-comments');


  Route::resource('presses', 'Cms\PressesController',['except' => ['index', 'destroy']]);
  Route::post('presses/destroy', 'Cms\PressesController@destroy');
  Route::get('/presses', 'Cms\PressesController@index')->name('admin-presses');


  Route::resource('events', 'Cms\EventsController',['except' => ['index', 'destroy']]);
  Route::post('events/destroy', 'Cms\EventsController@destroy');
  Route::get('/events', 'Cms\EventsController@index')->name('admin-events');


  Route::resource('projects', 'Cms\ProjectsController',['except' => ['index', 'destroy']]);
  Route::post('projects/destroy', 'Cms\ProjectsController@destroy');
  Route::get('/projects', 'Cms\ProjectsController@index')->name('admin-projects');


  Route::resource('users', 'Cms\UsersController',['except' => ['index', 'destroy','show']]);
  Route::post('users/destroy','Cms\UsersController@destroy');
  Route::get('/users', 'Cms\UsersController@index')->name('admin-users');


  Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('admin-logs');


  Route::get('backups', 'Cms\BackupsController@index')->name('admin-backups');
  Route::post('backups/take/database', 'Cms\BackupsController@take');
  Route::post('backups/take/files', 'Cms\BackupsController@take');
  Route::post('backups/take/full', 'Cms\BackupsController@take');
  Route::post('backups/take/clear', 'Cms\BackupsController@take');

});








