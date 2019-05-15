<?php

namespace App\Http\Middleware;

use Closure;

class TestHello
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
        echo "hello middelware:use php artisan:make middleware TestHello middelware create";
        br();
        return $next($request);
    }
}
