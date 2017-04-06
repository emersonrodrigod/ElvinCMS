<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Testimonial;
use App\Http\Requests\TestimonialRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class TestimonialsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.testimonials';
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = Testimonial::get();
    
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
  public function store(TestimonialRequest $request)
  {
    
    $testimonial = Testimonial::create($request->except(['lang']));
    $testimonial->lang = Session::get('lang');
    $testimonial->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Project $project
   * @return Response
   */
  public function edit(Testimonial $testimonial)
  {
    return view($this->view.'.'.__FUNCTION__, compact('testimonial'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(TestimonialRequest $request, Testimonial $testimonial)
  {
    $testimonial->update( $request->except(['lang']));
    $testimonial->lang = Session::get('lang');

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
      Testimonial::destroy($request->all());
    } 
  }
}