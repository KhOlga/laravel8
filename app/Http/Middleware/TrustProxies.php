<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Proxy;
use Illuminate\Http\Request;

class TrustProxies
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
		if (in_array($request->ip(), Proxy::getIpAddresses()) !== true) {
			return response()
				->view('errors.403'); // TODO: add ipAddress to log
		}

		return $next($request);
	}
}
