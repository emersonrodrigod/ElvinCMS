<?php

namespace App\Http\Middleware;

use App;
use Closure;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*if (config('settings.Multi_language') && null !== config('app.locales')) {
            if (!Session::has('lang')) {
                $browser_language = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
                
                if (in_array($browser_language, array_keys(config('app.locales')))) {
                    Session::put('lang', $browser_language);              
                } else {
                    Session::put('lang', config('app.locale'));  
                }
            }
        } 
        else {
            Session::put('lang', config('app.locale'));
        }
        
        Lang::setlocale(Session::get('lang'));
        */
        Session::put('lang', config('app.locale'));
        Lang::setlocale(Session::get('lang'));

        return $next($request);
    }
}