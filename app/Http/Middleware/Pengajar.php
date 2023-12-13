<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Pengajar
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 'pengajar') {
            return $next($request);
        }

        abort(401);
    }
}
