<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!(Session::get('admin'))) return redirect('masuk');
        return $next($request);
    }
}
