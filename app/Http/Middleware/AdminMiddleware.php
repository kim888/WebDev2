<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //checks if usertype is admin, if not shows unauthorized.blade
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->type != 'admin')
        {
            return new Response(view('unauthorized')->with('role', 'ADMIN'));
        }
        return $next($request);
    }
}
