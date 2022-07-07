<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class IsLogin
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
        if(!Auth::check())
        {
            return redirect()->route('loginpage')->with('error','Please First Login Your Self..');
        }
        return $next($request);   
    }
}
