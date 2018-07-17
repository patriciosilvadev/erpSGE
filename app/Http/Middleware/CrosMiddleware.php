<?php

namespace App\Http\Middleware;

use Closure;

class CrosMiddleware
{
    public function handle($request, Closure $next)
    {
        if($request->is('api/*')){
            header('Access-Control-Allow-Origin: http://localhost:4300');
            header('Access-Control-Allow-Headers: Content-Type,Authorization');
            header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE');
        }
        return $next($request);
    }
}
