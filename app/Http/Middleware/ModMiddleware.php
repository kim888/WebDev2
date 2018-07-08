<?php

namespace App\Http\Middleware;

use Closure;

class ModMiddleware
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
        //checks if usertype is mod, if not shows unauthorized.blade
        if ($request->user() && $request->user()->type != 'mod')
        {
            return new Response(view('unauthorized')->with('role', 'mod'));
}
        return $next($request);
    }
}
