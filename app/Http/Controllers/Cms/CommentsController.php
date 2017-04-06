<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class CommentsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.comments';
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = Comment::get();
    
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
  public function store(CommentRequest $request)
  {
    
    $comment = Comment::create($request->except(['lang']));
    $comment->lang = Session::get('lang');
    $comment->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Comment $comment
   * @return Response
   */
  public function edit(Comment $comment)
  {
    return view($this->view.'.'.__FUNCTION__, compact('comment'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(CommentRequest $request, Comment $comment)
  {
    $comment->update( $request->except(['lang']));
    $comment->lang = Session::get('lang');

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
      Comment::destroy($request->all());
    } 
  }
}