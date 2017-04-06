<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class ReadyMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  protected $auth;

  /**
   * Creates a new instance of the middleware.
   *
   * @param Guard $auth
   */
  public function __construct(Guard $auth)
  {
      $this->auth = $auth;
  }
  
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    //var_dump(Auth::user()->role->name);

    if (Auth::guest() || Auth::user()->role->name != 'developer') {
      if (config('settings.Maintenance_mode')) {
        return redirect('maintenance');
      }

      if (config('settings.Construction_mode')) {
        return redirect('construction');
      }
    }
    return $next($request);
  }
}
