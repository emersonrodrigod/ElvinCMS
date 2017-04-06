<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Lang;

class LanguageController extends Controller {

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index($lang)
   {
      Session::put('lang', $lang);
      
      return Redirect::back()->with('flash-message', Lang::get('_.Language has successfully changed'));
   }

}