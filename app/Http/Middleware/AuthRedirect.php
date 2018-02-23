<?php

namespace App\Http\Middleware;

use Closure;

class AuthRedirect
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

      echo "Auth Redirect";
      //  return $next($request);
    }
}
