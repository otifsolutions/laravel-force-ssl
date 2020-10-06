<?php

namespace OTIFSolutions\ForceSSL\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceSSL
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
