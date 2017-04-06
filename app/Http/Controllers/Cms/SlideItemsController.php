<?php

namespace App\Http\Controllers\Cms;

use App\{Slide, SlideItem, SlideItemDetail};
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class SlideItemsController extends Controller
{
  /**
   * Remove the specified resource from storage with ajax request
   *
   * @param  AJAX Request
   * @return Response
   */
  public function insert(Request $request)
  { 
    $item = SlideItem::create($request->all());

    $id = $item->id;
    $captions = $request->get('caption');
    $links = $request->get('link');
    $languages = config('app.locales');
    $multiLanguage = config('settings.Multi_language');

    if ($multiLanguage == 1) 
    {
      foreach ($languages AS $key => $lang) {
        $detail = new SlideItemDetail;
        $detail->slide_item_id = $item->id;
        $detail->lang = $key;
        $detail->caption = $captions[$key];
        $detail->link = $links[$key];
        $detail->save();
      }
    } 
    else 
    {
      $detail = new SlideItemDetail;
      $detail->slide_item_id = $item->id;
      $detail->lang = Session::get('lang');
      $detail->caption = $captions[Session::get('lang')];
      $detail->link = $links[Session::get('lang')];
      $detail->save();
    }
    return [$item->load('slide_item_details'), $captions[Session::get('lang')]];  
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
      SlideItem::destroy($request->all());
    } 
  }
}
