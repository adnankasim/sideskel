<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class PenggunaMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!(Session::get('pengguna'))) return redirect('masuk');
        return $next($request);
    }
}
