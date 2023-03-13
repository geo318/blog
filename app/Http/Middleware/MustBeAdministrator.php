<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Closure;
use Illuminate\Http\Request;

class MustBeAdministrator
{
	public function handle(Request $request, Closure $next)
	{
		if (auth()->user()?->username !== 'giorgilomi')
		{
			abort(Response::HTTP_FORBIDDEN);
		}
		return $next($request);
	}
}
