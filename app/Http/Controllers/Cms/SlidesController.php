<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\{Slide, SlideItem, SlideItemDetail};
use App\Http\Requests\SlideRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Repositories\Slides;

class SlidesController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  var $view = 'cms.slides';
  /**
   * The slide repository implementation.
   *
   * @var Slides
   */
  protected $slides;

  /**
   * Create a new controller instance.
   *
   * @param  Slides  $slides
   * @return void
   */
    public function __construct(Slides $slides)
    {
        $this->slides = $slides;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::user()->role->name != 'developer') {
      $items = $this->slides->visible();
    } else {
      $items = $this->slides->all();
    }
    return view($this->view.'.'.__FUNCTION__, compact('items'));
  }
 
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view($this->view.'.'.__FUNCTION__);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Response
   * @return redirect to back
   */
  public function store(SlideRequest $request)
  {
    $slide = Slide::create($request->all());
    
    return redirect("admin/slides/{$slide->id}/edit")->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**

   * Show the form for editing the specified resource.
   *
   * @param  \App\Slide $item
   * @return Response
   */
  public function edit(Slide $slide)
  {
    // lazy eager loading
    $slide->load('slide_items.slide_item_details'); 

    $languages = config('app.locales');
    $multiLanguage = config('settings.Multi_language');

    return view($this->view.'.'.__FUNCTION__, compact('slide','languages', 'multiLanguage'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(SlideRequest $request, Slide $slide)
  {
    $slide->update( $request->all()); 

    return redirect()->back()->with('flash-message', Lang::get('cms.Updated'));
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
      Slide::destroy($request->all());
    } 
  }

   public function list(Slide $slide)
  {
    return $slide->load('slide_items.slide_item_details'); 
  }
}
