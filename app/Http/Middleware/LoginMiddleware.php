<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    $request 请求对象
    public function handle($request, Closure $next)
    {
        if($request->session()->has('user')){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
