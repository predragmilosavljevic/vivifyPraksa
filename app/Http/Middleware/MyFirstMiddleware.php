<?php

namespace App\Http\Middleware;

use Closure;

class MyFirstMiddleware
{
    public function handle($request, Closure $next)
    {
	
	// do some check before passing request to the app

          return $next($request);
    }

}

