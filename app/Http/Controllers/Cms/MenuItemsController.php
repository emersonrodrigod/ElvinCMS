<?php

namespace App\Http\Controllers\Cms;

use App\{Category, MenuItem, Page, Post};
use App\Http\Requests\MenuItemRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};
use App\Repositories\{MenuItems, Pages, Posts, Categories};

class MenuItemsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.menus';
  /**
   * The menuitem, page, post, category repository implementation.
   *
   * @var MenuItems, Pages, Posts, Categories
   */
  protected $menuItems;
  protected $pages;
  protected $posts;
  protected $categories;

  /**
   * Create a new controller instance.
   *
   * @param  MenuItems  $menuItems
   * @return void
   */
    public function __construct(MenuItems $menuItems, Pages $pages, Posts $posts, Categories $categories)
    {
        $this->menuItems = $menuItems;
        $this->pages = $pages;
        $this->posts = $posts;
        $this->categories = $categories;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = $this->menuItems->all();
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
  public function store(MenuItemRequest $request)
  {  
    $menu = MenuItem::create($request->except(['lang']));
    $menu->lang = Session::get('lang');
    $menu->save();

    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\MenuItem $item
   * @return Response
   */
  public function edit(MenuItem $menu)
  {
    return view($this->view.'.'.__FUNCTION__, compact('menu'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @return Response
   */
  public function update(MenuItemRequest $request, MenuItem $menu)
  {
    $menu->update($request->except(['lang']));
    $menu->lang = Session::get('lang');
    $menu->save(); 

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

      $subItems = $this->menuItems->subItems($request->input('id'));

      foreach ($subItems as $item) 
      {     
        $item->parent_id = 0;
        $item->save();
      }
      MenuItem::destroy($request->all());
    } 
  }

  /**
   * Sort categories
   *
   * @param serialized categories
   * @return 
   */
  public function order(Request $request)
  {
    if($request->ajax()){
      $list = $request->input('list');
      
      $list = parse_str($list, $output);

      $i = 0;

      foreach ($output['list'] as $key => $value) 
      {
        MenuItem::where('id', $key)->update(['order' => $i, 'parent_id' => $value]); 
        $i++;
      }        
    }
  }

  public function searchPages()
  {
    $pages = $this->pages->all();
    return $pages;
  }

  public function searchPosts()
  {
    $posts = $this->posts->all();
    return $posts;
  }

  public function searchCategories()
  {
    $categories = $this->categories->all();
    return $categories;
  }

}
