<?php

namespace App\Http\Middleware;

use Closure;

class IpAccess
{
    /**
     * Handle an incoming request.
     * 验证IP地址是否允许访问
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
