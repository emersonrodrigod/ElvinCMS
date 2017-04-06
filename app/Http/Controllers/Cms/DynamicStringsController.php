<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dynamic_string;
use Illuminate\Support\Facades\{Cache, Lang, Session};
use App\Repositories\DynamicStrings;

class DynamicStringsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.dynamic_strings';
  /**
   * The dynamic_string repository implementation.
   *
   * @var DynamicStrings
   */
    protected $dynamicStrings;

    /**
     * Create a new controller instance.
     *
     * @param  DynamicStrings  $dynamicStrings
     * @return void
     */
    public function __construct(DynamicStrings $dynamicStrings)
    {
        $this->dynamicStrings = $dynamicStrings;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dynamic_strings = $this->dynamicStrings->all(); 
        return view($this->view.'.'.__FUNCTION__,compact('dynamic_strings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dynamic_string $dynamic_string)
    {
        return view($this->view.'.'.__FUNCTION__, compact('dynamic_string'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dynamic_string $dynamic_string)
    {
        $dynamic_string->value = $request->input($dynamic_string->index);
        $dynamic_string->save();

        return redirect()->back()->with('flash-message', Lang::get('cms.Updated'));
    }

    public function updateAll(Request $request)
    {        
        $index_list = $this->dynamicStrings->listIndex();

        foreach($index_list as $index){
            $dynamic_string = $this->dynamicStrings->findIndex($index);
            $dynamic_string->value = $request->input($index);
            $dynamic_string->save();
        }
        return redirect()->back()->with('flash-message', Lang::get('cms.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
