<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Posts;
use App\{Post, Comment};
use SEO;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\{Session};



class PostsController extends Controller
{
    /**
    * Display folder name which includes blade 
    *
    * @return folder name
    */
    private $view = 'app.posts';

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        SEO::setTitle('Blog');
        SEO::setDescription('Blog page of our content management system');

        $posts = $this->posts->showLastSix();
        return view($this->view.'.'.__FUNCTION__,compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        SEO::setTitle($post->title);
        SEO::setDescription($post->summary);
        return view($this->view.'.'.__FUNCTION__,compact('post'));
    }


    public function search()
    {
        $posts = $this->posts->all();
        return $posts;
    }

    /**
   * Store a newly created resource in storage.
   *
   * @param  Response
   * @return redirect to back
   */
    public function storeComment(CommentRequest $request, Post $post)
    {  
        $comment = Comment::create($request->except(['lang']));
        $comment->lang = Session::get('lang');
        $comment->save();
        
    }
}
