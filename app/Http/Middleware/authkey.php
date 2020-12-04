<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authkey
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
        $token=$request->header('APP_key');
        if ($token !='iust'){
            return response()->json(['message'=>'no key'],401);
        }
        return $next($request);
    }
}
