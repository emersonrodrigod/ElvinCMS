<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ErrorController extends Controller
{
    /**
     * Show the error page
     *
     * @return \Illuminate\Http\Response
     */
    public function maintenance()
    {
      $location = explode(',', config('settings.Location'));
      Mapper::map($location[0], $location[1], ['zoom' => 15, 'center' => true, 'markers' => ['animation' => 'DROP']]);

      return view('errors.maintenance');
    }

    /**
     * Show the error page
     *
     * @return \Illuminate\Http\Response
     */
    public function construction()
    {
      $location = explode(',', config('settings.Location'));
      Mapper::map($location[0], $location[1], ['zoom' => 15, 'center' => true, 'markers' => ['animation' => 'DROP']]);

      return view('errors.construction');
    }
}
