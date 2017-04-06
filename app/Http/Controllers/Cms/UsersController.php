<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\{Role, User};
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash, Lang};
use Illuminate\Notifications\Notifiable;
use App\Repositories\Users;

class UsersController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'cms.users';
  /**
   * The user repository implementation.
   *
   * @var Users
   */
  protected $users;

  /**
   * Create a new controller instance.
   *
   * @param  Users  $users
   * @return void
   */
    public function __construct(Users $users)
    {
        $this->users = $users;
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::user()->role->name != 'developer') {
      $items = $this->users->visible();
    } else {
      $items = $this->users->all();
    }
    
    return view($this->view.'.'.__FUNCTION__, compact('items'));
  }
 
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $roles = $this->users->listRoles();
    
    return view($this->view.'.'.__FUNCTION__, compact('roles'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User $user
   * @return Response
   */
  public function edit(User $user)
  { 
    $roles = $this->users->listRoles();
    
    return view($this->view.'.'.__FUNCTION__, compact('user', 'roles'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Response
   * @return redirect to back
   */
  public function store(UserRequest $request)
  {
    $user = User::create($request->except(['password']));
    $user->password = Hash::make($request->input('password'));
    $user->save();
    
    return redirect()->back()->with('flash-message', Lang::get('cms.Succeeded'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  POST Request
   * @return Response
   */
  public function update(UserRequest $request, User $user)
  {
    $user->update($request->except(['password']));
    $user->password = Hash::make($request->input('password'));
    $user->save();

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
      User::destroy($request->all());
    } 
  }
 
}
