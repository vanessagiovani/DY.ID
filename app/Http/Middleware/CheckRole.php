<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        if ($request->user()->id == 1){
            return response()->view('home');
        }
        if ($request->user()->id != 1){
            return response()->view('home');
        }
        // else{
        //     return redirect('/DY.ID/home');
        // }
        return $next($request);
    }
}
