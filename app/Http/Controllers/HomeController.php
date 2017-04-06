<?php

namespace App\Http\Controllers;

use App\{Popup, Testimonial, Slide, SlideItem, SlideItemDetail};

use SEO;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\{Auth, Lang, Session};

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
  }


  public function logout() 
  {
    Auth::logout();
    return redirect('/');
  }
  
}
