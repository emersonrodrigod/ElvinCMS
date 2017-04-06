<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\{Gallery, GalleryItem, GalleryItemDetail};
use App\Http\Requests\GalleryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Repositories\Galleries;

class GalleriesController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.galleries';
  /**
   * The gallery repository implementation.
   *
   * @var Galleries
   */
  protected $galleries;

  /**
   * Create a new controller instance.
   *
   * @param  Galleries  $galleries
   * @return void
   */
    public function __construct(Galleries $galleries)
    {
        $this->galleries = $galleries;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::user()->role->name != 'developer') {
      $items = $this->galleries->visible();
    } else {
      $items = $this->galleries->all();
    }
    return view($this->view.'.'.__FUNCTION__, compact('items'));
  }
 
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Gallery $gallery)
  {
    return view($this->view.'.'.__FUNCTION__, compact('gallery'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Response
   * @return redirect to back
   */
  public function store(GalleryRequest $request)
  {
    $gallery = Gallery::create($request->except(['slug']));
    $gallery->slug = str_slug($request->input('title'),'-'); 
    $gallery->save();

    return redirect("admin/galleries/{$gallery->id}/edit")->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**

   * Show the form for editing the specified resource.
   *
   * @param  \App\Gallery $item
   * @return Response
   */
  public function edit(Request $request, Gallery $gallery)
  {
     // lazy eager loading
    $gallery->load('items.details'); 

    $languages = (object)config('app.locales');
    $multiLanguage = config('settings.Multi_language');
    
    return view($this->view.'.'.__FUNCTION__, compact('gallery', 'languages', 'multiLanguage'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(GalleryRequest $request, Gallery $gallery)
  {
    $gallery->update($request->except(['slug']));
    $gallery->slug = str_slug($request->input('title'),'-'); 
    $gallery->save();
    
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
      Gallery::destroy($request->all());
    } 
  }

  public function list(Gallery $gallery)
  {
    return $gallery->load('items.details'); 
  }
}
