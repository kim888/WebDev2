<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Response;

class MemberMiddleware
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
        //checks if usertype is member, if not shows unauthorized.blade
        if ($request->user() && $request->user()->type != 'member')
        {
            return new Response(view('unauthorized')->with('role', 'MEMBER'));
        }
        return $next($request);
    }
}
