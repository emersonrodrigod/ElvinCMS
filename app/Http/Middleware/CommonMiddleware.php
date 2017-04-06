<?php

namespace App\Http\Middleware;

use Closure;
use App\Dynamic_string;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\{Cache, Lang, Session};

class CommonMiddleware
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
   * @example config('ds.Dynamic_string')
   * @return adds ds object into config
   */
  public function handle($request, Closure $next)
  {
    return $next($request);
  }
}
