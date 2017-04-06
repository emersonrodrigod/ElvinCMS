<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Page;
use App\Http\Requests\PageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};
use App\Repositories\Pages;

class PagesController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.pages';
  /**
   * The page repository implementation.
   *
   * @var Pages
   */
  protected $pages;

  /**
   * Create a new controller instance.
   *
   * @param  Pages  $pages
   * @return void
   */
    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::user()->role->name != 'developer') {
      $items = $this->pages->visible();
    } else {
      $items = $this->pages->all();
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
  public function store(PageRequest $request)
  {
    $page = Page::create($request->except(['lang','slug']));
    $page->lang = Session::get('lang');
    $page->slug = str_slug($request->input('title'),'-'); 
    $page->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @return Response
   */
  public function edit(Page $page)
  {
    return view($this->view.'.'.__FUNCTION__, compact('page'));
  }

  /**
   * Update the specified resource in storage.
   *
   */
  public function update(PageRequest $request, Page $page)
  {
    $page->update( $request->except(['slug','lang']));
    $page->lang = Session::get('lang');
    $page->slug = str_slug($request->input('title'),'-'); 
    $page->save();
    
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
      Page::destroy($request->all());
    } 
  }
}
