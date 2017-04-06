<?php

namespace App\Http\Controllers\Cms;

use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Cache, Lang};
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use App\Repositories\Settings;

class SettingsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  var $view = 'cms.settings';
  /**
   * The setting repository implementation.
   *
   * @var Settings
   */
  protected $settings;

  /**
   * Create a new controller instance.
   *
   * @param  Settings  $settings
   * @return void
   */
    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function edit($group)
  {
    $results = $this->settings->findGroup($group);

    return view($this->view.'.'.__FUNCTION__, compact('results'));
  }

  /**
   * Update the specified resource in storage.
   *
   */
  public function update(Request $request, $group)
  {
    $index_list = $this->settings->listIndex($group);
    foreach($index_list as $index)
    {
      $setting = $this->settings->findIndex($index);
      $setting->value = $request->input($index);
      $setting->save();
    }
    // When the settings have been updated, clear the cache for the key 'settings':
    Cache::forget('settings');

    return redirect()->back()->with('flash-message', Lang::get('cms.Updated'));
  }

  /**
  * map coordinates 
  */
  public function map(Request $request)
  {
    if($request->ajax())
    { 
      $lat = $request->input('lat');
      $lng = $request->input('lng');
      $coordinate = $lat.','.$lng;
      $this->settings->findLocation()->update(['value'=>$coordinate]);  
    }
  }
 
}
