<?php

namespace App\Http\Controllers\Cms;

use App\Faq;
use App\Http\Requests\FaqRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};
use App\Repositories\Faqs;

class FaqsController extends Controller
{

  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.faqs';
  /**
   * The faq repository implementation.
   *
   * @var Faqs
   */
  protected $faqs;

  /**
   * Create a new controller instance.
   *
   * @param  Faqs  $faqs
   * @return void
   */
    public function __construct(Faqs $faqs)
    {
      $this->faqs = $faqs;
    }
  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $items = $this->faqs->all();
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
  public function store(FaqRequest $request)
  {
    $faq = Faq::create($request->except(['lang']));
    $faq->lang = Session::get('lang');
    $faq->save();

    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Faq $item
   * @return Response
   */
  public function edit(Faq $faq)
  {
    return view($this->view.'.'.__FUNCTION__, compact('faq'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @param  id of the row
   * @return Response
   */
  public function update(FaqRequest $request, Faq $faq)
  {
    $faq->update( $request->except(['lang']));
    $faq->lang = Session::get('lang'); 
    $faq->save();

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
      Faq::destroy($request->all());
    } 
  }

  /**
   * Sort categories
   *
   * @param serialized categories
   * @return 
   */
  public function order(Request $request)
  {
    if($request->ajax()){
      $list = $request->input('list');
      
      $list = parse_str($list, $output);

      $i = 0;

      foreach ($output['list'] as $key => $value) 
      {
        Faq::where('id', $key)->update(['order' => $i]); 
        $i++;
      }        
    }
  } 
}
