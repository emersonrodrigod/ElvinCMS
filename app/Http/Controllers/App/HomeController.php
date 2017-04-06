<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEO;

class HomeController extends Controller
{
    /**
    * Display folder name which includes blade 
    *
    * @return folder name
    */
    private $view = 'app';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEO::setTitle('CMS | Laravel | HomePage');
        SEO::setDescription('Laravel based Content Management System, free to use. This web site which we labeled as App is a dummy trial of ElvinCMS. You may create whatever you want.');
        SEO::setCanonical('http://demo.guncebektas.com');
        return view($this->view.'.'.__FUNCTION__);
    }

}
