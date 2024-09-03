<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompressResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->header('Content-Encoding', 'gzip'); // You can also use 'deflate' or 'br' (Brotli) as alternatives
        $request->header('Vary', 'Accept-Encoding');
        $request->header('Cache-Control', 'max-age=31536000');
        return $next($request);
    }
}
