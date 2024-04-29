<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WjobMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            "wjob_code" => ["required", "min:3", "max:3"],
            "wjob_name" => "required",
            "wjob_status" => "required",
            "start_date" => "required",
            "division" => "required",
        ]);

        return $next($request);
    }
}
