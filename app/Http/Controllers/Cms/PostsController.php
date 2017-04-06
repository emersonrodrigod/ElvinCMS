<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\{Category, Post, Tag, Slide};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};
use App\Http\Requests\PostRequest;
use App\Repositories\Posts;

class PostsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.posts';
  /**
   * The post repository implementation.
   *
   * @var Posts
   */
  protected $posts;

  /**
   * Create a new controller instance.
   *
   * @param  Posts  $posts
   * @return void
   */
    public function __construct(Posts $posts)
    {
        $this->posts = $posts;
    }
    
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = $this->posts->all();
    return view($this->view.'.'.__FUNCTION__, compact('items'));
  }
 
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {  
    $categories = $this->posts->listCategories();
    $tags = $this->posts->listTags();
    $slides = $this->posts->listSlides();

    return view($this->view.'.'.__FUNCTION__, compact('categories', 'tags', 'slides'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @return Response
   */
  public function edit(Post $post)
  {
    $categories = $this->posts->listCategories();
    $tags = $this->posts->listTags();
    $slides = $this->posts->listSlides();

    return view($this->view.'.'.__FUNCTION__, compact('post', 'categories', 'tags', 'slides'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Response
   * @return redirect to back
   */
  public function store(PostRequest $request)
  { 
    $post = Auth::user()->posts()->create($request->except(['lang','slug']));   
    $post->lang = Session::get('lang');  
    $post->slug = str_slug($request->input('title'),'-'); 
    $post->save();   
    $this->syncCategories($post, $request->input('category_list')); 
    $this->syncTags($post, $request->input('tag_list')); 

    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @return Response
   */
  public function update(PostRequest $request, Post $post)
  { 
    $post->update( $request->except(['slug','lang']));
    $post->lang = Session::get('lang');  
    $post->slug = str_slug($request->input('title'),'-'); 
    $post->save();
    $this->syncCategories($post, $request->input('category_list')); 
    $this->syncTags($post, $request->input('tag_list')); 
    
   
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
      Post::destroy($request->all());
    } 
  }

/* ============== PRIVATE FUNCTIONS ============================ */
  /*
    *  Sync up the list of tags in the database
    *  @param Post $post
    *  @param array $tags
    */
     private function syncTags(Post $post, $tags)
    {
        if($tags){
          $post->tags()->sync($tags);
        }
        else {
          $post->tags()->detach();
        }
    }
   /*
    *  Sync up the list of categories in the database
    *  @param Post $post
    *  @param array $categories
    */
     private function syncCategories(Post $post, array $categories)
    {
        $post->categories()->sync($categories);
    }
}
