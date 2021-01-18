<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// key -> 'role'
class EnsureUserHasRole
{
	/**
	 * Handle the incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string  $role
	 * @return mixed
	 */
	public function handle($request, Closure $next, $role)
	{
		// TODO: add 'roles' table, relation, seeder, etc.
		/*if (! $request->user()->hasRole($role)) {
			// Redirect...
		}*/

		return $next($request);
	}
}
