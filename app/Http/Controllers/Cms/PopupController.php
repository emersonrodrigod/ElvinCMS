<?php

namespace App\Http\Controllers\Cms;

use App\Popup;
use App\Http\Requests\PopupRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class PopupController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.popup';
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $popup = Popup::first(); 

    return view($this->view.'.'.__FUNCTION__, compact('popup'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(PopupRequest $request, Popup $popup)
  {
    $popup->update($request->all());

    return redirect()->back()->with('flash-message', Lang::get('cms.Updated'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Popup $item
   * @return Response
   */
  public function edit(Popup $popup)
  {
    return view($this->view.'.'.__FUNCTION__, compact('popup'));
  } 
}
