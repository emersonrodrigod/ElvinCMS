<?php
/**
 * View composers are callbacks or class methods that are called when a view is rendered. 
 * If you have data that you want to be bound to a view each time that view is rendered, 
 * a view composer can help you organize that logic into a single location.
 *
 * @link https://laravel.com/docs/5.3/views#view-composers
 */
namespace App\Providers;

use App\{Dynamic_string, Setting, MenuItem, Post};
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{Schema, Cache, Session};

class ViewComposerServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
      /* compose template spesific variables */
      $this->composeSettings();
      $this->composeDynamicStrings();
      $this->composeMenuItems();

  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
      //
  }
 
  private function composeSettings() 
  {
    if(Schema::hasTable('settings'))
    {
      $settings = Cache::get('settings', Setting::fetch());
      view()->share('settings', $settings);
    }   
  }

  private function composeDynamicStrings() {

    view()->composer('cms.includes.nav', function($view) {
      
      $dynamic_strings = Dynamic_string::get();
      $view->with('dynamic_strings', $dynamic_strings);

    });
  }

  private function composeMenuItems() {
    
    view()->composer('app.includes.nav', function($view) {
      $items = MenuItem::where('lang', Session::get('lang'))->orderBy('order', 'asc')->get();
      foreach ($items AS $key=>$item) {
        
      /*  $hasChild = MenuItem::where('parent_id', $item->id)->first();
        if ($hasChild != null) {
          $items[$key]['has_child'] = true;
        } else {
          $items[$key]['has_child'] = false;
        }*/
      }

      $view->with('menuitems', $items);
    });
  }


}
