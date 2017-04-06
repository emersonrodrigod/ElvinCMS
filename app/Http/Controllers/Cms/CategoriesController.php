<?php

namespace App\Http\Controllers\Cms;

use Auth;

use App\Category;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};
use App\Repositories\Categories;

class CategoriesController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.categories';
  /**
     * The category repository implementation.
     *
     * @var Categories
     */
    protected $categories;

    /**
     * Create a new controller instance.
     *
     * @param  Categories  $categories
     * @return void
     */
    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::user()->role->name != 'developer') {
      $items = $this->categories->visible();
    } 
    else {
      $items = $this->categories->all();
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
    $items = $this->categories->visibleList();

    return view($this->view.'.'.__FUNCTION__, compact('items'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Response
   * @return redirect to back
   */
  public function store(CategoryRequest $request)
  {
    $category = Category::create($request->except(['lang','slug']));
    $category->lang = Session::get('lang');
    $category->slug = str_slug($request->input('title'),'-'); 
    $category->save();

    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(CategoryRequest $request, Category $category)
  {
    $category->update($request->except(['lang','slug']));
    $category->lang = Session::get('lang');
    $category->slug = str_slug($request->input('title'),'-'); 
    $category->save();

    return redirect()->back()->with('flash-message', Lang::get('cms.Updated'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Category $item
   * @return Response
   */
  public function edit(Category $category)
  {
    $items = $this->categories->visibleList();

    return view($this->view.'.'.__FUNCTION__, compact('category', 'items'));
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
      $subItems = $this->categories->subItems($request->input('id'));

      foreach ($subItems as $item) 
      {     
        $item->parent_id = 0;
        $item->save();
      }
      Category::destroy($request->all());
      
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
        Category::where('id', $key)->update(['order' => $i, 'parent_id' => $value]); 
        $i++;
      }        
    }
  } 
    
}
