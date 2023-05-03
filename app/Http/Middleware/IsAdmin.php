<?php

// Copyright (C) 2023 Marcel "kojo" Joshua
// Github   : https://www.github.com/marceljsh
// Linkedin : https://www.linkedin.com/in/marceljsh

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !in_array(auth()->user()->username, ['veaueed', 'coleworld', 'chaewon']) ) {
            abort(403);
        }

        return $next($request);
    }
}
