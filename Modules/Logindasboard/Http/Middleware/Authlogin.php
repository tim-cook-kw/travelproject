<?php

namespace Modules\Logindasboard\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->exists('user')) {
        return redirect('/');
    }
        return $next($request);
    }
}
