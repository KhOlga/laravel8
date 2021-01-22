<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

			Log::info(now() . ' someone tried to access to application from ' . $request->ip() . ' IP address');
			return response()
				->view('errors.403'); // TODO: add ipAddress to log
		}

		return $next($request);
	}
}
