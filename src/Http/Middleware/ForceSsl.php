<?php

namespace OTIFSolutions\Forcessl\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class ForceSsl
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
        if (!$request->secure() && env('FORCE_SSL',true) == true )
        {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);

    }
}
