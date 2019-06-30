<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class LoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!(Session::get('login'))) return redirect('masuk');
        return $next($request);
    }
}
