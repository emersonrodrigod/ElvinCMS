<?php

namespace App\Http\Controllers\Cms;

use App\{Gallery, GalleryItem, GalleryItemDetail};
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class GalleryItemsController extends Controller
{
  /**
   * Remove the specified resource from storage with ajax request
   *
   * @param  AJAX Request
   * @return Response
   */
  public function insert(Request $request)
  { 
    $item = GalleryItem::create($request->all());
    
    $id = $item->id;
    $captions = $request->get('caption');    
    $languages = config('app.locales');
    $multiLanguage = config('settings.Multi_language');

    if ($multiLanguage == 1) 
    {  
      foreach ($languages AS $key => $lang) 
      {    
        $detail = new GalleryItemDetail;
        $detail->gallery_item_id = $item->id;
        $detail->lang = $key;
        $detail->caption = $captions[$key];
        $detail->save();
      }
    } 
    else 
    {
      $detail = new GalleryItemDetail;
      $detail->gallery_item_id = $item->id;
      $detail->lang = Session::get('lang');
      $detail->caption = $captions[Session::get('lang')];
      $detail->save();
    } 


    return [ $item->load('details'), $captions[Session::get('lang')]];  
  }

  /**
   * Remove the specified resource from storage with ajax request
   *
   * @param  AJAX Request
   * @return Response
   */
  public function destroy(Request $request)
  { 
    if($request->ajax()){
      GalleryItem::destroy($request->all());
    } 
  }

}
