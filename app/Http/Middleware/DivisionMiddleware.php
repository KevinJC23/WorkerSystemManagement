<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DivisionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            "division_code" => ["required", "min:3", "max:3"],
            "division_name" => "required",
            "head_division" => "required",
            "contact_info" => ["required", "digits:6", "numeric"],
            "location" => "required",
        ]);

        return $next($request);
    }
}
