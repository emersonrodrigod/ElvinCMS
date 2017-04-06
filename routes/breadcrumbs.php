<?php
// Admin
Breadcrumbs::register('admin', function($breadcrumbs){
  $breadcrumbs->push(Lang::get('cms_nav.Dashboard'), route('admin'));
});
/* Admin - Settings */
Breadcrumbs::register('admin-settings', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::get('cms_nav.Settings'));
});
/* Admin - Dynamic Strings */
Breadcrumbs::register('admin-dynamic-strings', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Dynamic string', 2));
});
// Admin - Pages
Breadcrumbs::register('admin-pages', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Page', 2), route('admin-pages'));
});
Breadcrumbs::register('admin-pages-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-pages');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Page', 1));
});
Breadcrumbs::register('admin-pages-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-pages');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Page', 1));
});
// Admin - Posts
Breadcrumbs::register('admin-posts', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Post', 2), route('admin-posts'));
});
Breadcrumbs::register('admin-posts-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-posts');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Post', 1));
});
Breadcrumbs::register('admin-posts-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-posts');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Post', 1));
});
// Admin - Categories
Breadcrumbs::register('admin-categories', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::get('cms_nav.Categories'), route('admin-categories'));
});
Breadcrumbs::register('admin-categories-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-categories');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Category', 1));
});
Breadcrumbs::register('admin-categories-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-categories');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Category', 1));
});
// Admin - Tags
Breadcrumbs::register('admin-tags', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::get('cms_nav.Tags'), route('admin-tags'));
});
Breadcrumbs::register('admin-tags-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-tags');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Tag', 1));
});
Breadcrumbs::register('admin-tags-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-tags');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Tag', 1));
});
// Admin - Galleries
Breadcrumbs::register('admin-galleries', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Gallery', 2), route('admin-galleries'));
});
Breadcrumbs::register('admin-galleries-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-galleries');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Gallery', 1));
});
Breadcrumbs::register('admin-galleries-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-galleries');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Gallery', 1));
});
// Admin - Slides
Breadcrumbs::register('admin-slides', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Slide', 2), route('admin-slides'));
});
Breadcrumbs::register('admin-slides-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-slides');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Slide', 1));
});
Breadcrumbs::register('admin-slides-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-slides');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Slide', 1));
});
// Admin - Menus
Breadcrumbs::register('admin-menus', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Menu', 2), route('admin-menus'));
});
Breadcrumbs::register('admin-menus-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-menus');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Menu', 1));
});
Breadcrumbs::register('admin-menus-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-menus');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Menu', 1));
});
// Admin - Faqs
Breadcrumbs::register('admin-faqs', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Faq', 2), route('admin-faqs'));
});
Breadcrumbs::register('admin-faqs-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-faqs');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Faq', 1));
});
Breadcrumbs::register('admin-faqs-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-faqs');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Faq', 1));
});
// Admin - Popup
Breadcrumbs::register('admin-popup', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::get('cms_nav.Popup Window'), route('admin-popup'));
});
// Admin - Testimonials
Breadcrumbs::register('admin-testimonials', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Testimonials', 2), route('admin-testimonials'));
});
Breadcrumbs::register('admin-testimonials-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-testimonials');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Testimonials', 1));
});
Breadcrumbs::register('admin-testimonials-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-testimonials');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Testimonials', 1));
});

// Admin - Comments
Breadcrumbs::register('admin-comments', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Comments', 2), route('admin-comments'));
});
Breadcrumbs::register('admin-comments-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-comments');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Comments', 1));
});

// Admin - Presses
Breadcrumbs::register('admin-presses', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::get('cms_nav.Press'), route('admin-presses'));
});
Breadcrumbs::register('admin-presses-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-presses');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::get('cms_nav.Press'));
});
Breadcrumbs::register('admin-presses-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-presses');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::get('cms_nav.Press'));
});
// Admin - Events
Breadcrumbs::register('admin-events', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Events', 2), route('admin-events'));
});
Breadcrumbs::register('admin-events-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-events');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Events', 1));
});
Breadcrumbs::register('admin-events-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-events');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Events', 1));
});
// Admin - Projects
Breadcrumbs::register('admin-projects', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Projects', 2), route('admin-projects'));
});
Breadcrumbs::register('admin-projects-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-projects');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.Projects', 1));
});
Breadcrumbs::register('admin-projects-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-projects');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.Projects', 1));
});
// Admin - Users
Breadcrumbs::register('admin-users', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.User', 2), route('admin-users'));
});
Breadcrumbs::register('admin-users-create', function($breadcrumbs){
  $breadcrumbs->parent('admin-users');
  $breadcrumbs->push(Lang::get('_.New').' '.Lang::choice('cms_nav.User', 1));
});
Breadcrumbs::register('admin-users-edit', function($breadcrumbs){
  $breadcrumbs->parent('admin-users');
  $breadcrumbs->push(Lang::get('_.Edit').' '.Lang::choice('cms_nav.User', 1));
});
// Admin - Logs
Breadcrumbs::register('admin-logs', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::get('cms_nav.Logs'), route('admin-logs'));
});
// Admin - Backups
Breadcrumbs::register('admin-backups', function($breadcrumbs){
  $breadcrumbs->parent('admin');
  $breadcrumbs->push(Lang::choice('cms_nav.Backup', 2), route('admin-backups'));
});


