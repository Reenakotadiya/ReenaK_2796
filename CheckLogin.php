<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class CheckLogin
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
     if(Auth::user())
        {
          return redirect()->route('index')->with('error','you are alredy Logged In!!');
        }
        return $next($request);
    }
}

