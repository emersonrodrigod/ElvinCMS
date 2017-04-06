<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Project;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class ProjectsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  var $view = 'cms.projects';

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = Project::get();
    
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
  public function store(ProjectRequest $request)
  {
    $project = Project::create($request->except(['lang','slug']));
    $project->lang = Session::get('lang');
    $project->slug = str_slug($request->input('title'),'-'); 
    $project->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Project $project
   * @return Response
   */
  public function edit(Project $project)
  {
    return view($this->view.'.'.__FUNCTION__, compact('project'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(ProjectRequest $request, Project $project)
  {  
    $project->update($request->except(['lang','slug']));
    $project->lang = Session::get('lang');
    $project->slug = str_slug($request->input('title'),'-'); 
    $project->save();

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
      Project::destroy($request->all());
    } 
  }
}
