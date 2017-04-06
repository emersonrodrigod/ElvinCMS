<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Press;
use App\Http\Requests\PressRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class PressesController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.presses';
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = Press::get();
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
  public function store(PressRequest $request)
  {

    $press = Press::create($request->except(['lang','slug']));
    $press->lang = Session::get('lang');
    $press->slug = str_slug($request->input('title'),'-'); 
    $press->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Project $project
   * @return Response
   */
  public function edit(Press $press)
  {
    return view($this->view.'.'.__FUNCTION__, compact('press'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @return Response
   */
  public function update(PressRequest $request, Press $press)
  {
    $press->update( $request->except(['lang','slug']));
    $press->lang = Session::get('lang');
    $press->slug = str_slug($request->input('title'),'-'); 
    $press->save();

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
      Press::destroy($request->all());
    } 
  }
}
