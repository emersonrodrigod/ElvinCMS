<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEO;

class AboutController extends Controller
{
    /**
    * Display folder name which includes blade 
    *
    * @return folder name
    */
    private $view = 'app.about';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        SEO::setTitle('About Us');
        SEO::setDescription('About Us page of our content management system');
        
        return view($this->view.'.'.__FUNCTION__);
    }

}
