<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpsProtocol
{

    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->secure()) {
            # code...
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
