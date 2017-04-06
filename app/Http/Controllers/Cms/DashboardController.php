<?php

namespace App\Http\Controllers\Cms;

use App\{Category, Post, User};
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.dashboard';
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $categories = Category::count();
    $posts = Post::count();
    $users = User::count();

    return view($this->view.'.'.__FUNCTION__, compact('categories', 'posts', 'users'));
  }
}
