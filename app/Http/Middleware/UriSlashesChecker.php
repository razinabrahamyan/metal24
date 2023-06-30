<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UriSlashesChecker
{

    public function handle(Request $request, Closure $next)
    {
        $pattern = trim(request()->getPathInfo(), '/');
        if (request()->getPathInfo() === '/') {
            return $next($request);
        } else {
            if ($pattern === '') {
                Redirect::to('/')->send();
            }
        }
        return $next($request);
    }
}
