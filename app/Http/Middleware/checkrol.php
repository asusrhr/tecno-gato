<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkrol
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
        $rol = array_slice(func_get_args(),2);
        if(auth()->user()->hasRoles($rol)){
           return $next($request); 
        }
        return redirect()->route('/');
    }
}
