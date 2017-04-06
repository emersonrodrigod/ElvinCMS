<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Event;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class EventsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.events';

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = Event::get();
    
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
  public function store(EventRequest $request)
  {
    $event = Event::create($request->except(['lang','slug']));
    $event->lang = Session::get('lang');
    $event->slug = str_slug($request->input('title'),'-'); 
    $event->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Project $project
   * @return Response
   */
  public function edit(Event $event)
  {
    return view($this->view.'.'.__FUNCTION__, compact('event'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(EventRequest $request, Event $event)
  {
    $event->update($request->except(['lang','slug']));
    $event->lang = Session::get('lang');
    $event->slug = str_slug($request->input('title'),'-'); 
    $event->save();
    
    
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
      Event::destroy($request->all());
    } 
  }
}
