<?php

namespace App\Http\Controllers\Cms;

use Artisan;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Lang, Session};

class BackupsController extends Controller
{
  /**
   * Display folder name which includes blade 
   *
   * @return folder name
   */
  private $view = 'backups';

  /**
   * Display a listing of the backups.
   *
   * @return Response
   */
  public function index()
  {
    return view('cms.'.$this->view.'.'.__FUNCTION__);
  }

  /**
   * Remove the specified resource from storage with ajax request
   *
   * @param  AJAX Request
   * @return Response
   */
  public function take(Request $request)
  {
    switch ($request->input('type')) {
      case 'database':
        Artisan::call('backup:run', ['--only-db' => true]);
        break;
      case 'files':
        Artisan::call('backup:run', ['--only-files' => true]);
        break;
      case 'full':
        Artisan::call('backup:run');
        break;
      case 'clear':
        Artisan::call('backup:clean');
        break;
    }
  }
}
