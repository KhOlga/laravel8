<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// key 'web'
class EnsureTokenIsValid
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
    	if($request->input('token') !== $request->user()->token) { //TODO: add column 'token' to 'users' or use Sanctum ???
    		return redirect('welcome');
		}

        return $next($request);
    }
}
