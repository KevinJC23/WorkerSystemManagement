<?php
    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Validation\Rule;
    use Symfony\Component\HttpFoundation\Response;

    class WorkerMiddleware {
        /**
         * Handle an incoming request.
         *
         * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
         */
        public function handle(Request $request, Closure $next): Response {
            $request->validate([
                "worker_code" => ["required", "max:3", "numeric", Rule::unique("workers")->ignore($request->id)],
                "worker_name" => "required",
                "birthday" => "required",
                "phone_number" => ["required", "numeric", "digits:12", Rule::unique("workers")->ignore($request->id)],
                "salary" => ["required", "numeric", "max:1000000000.00"],
                "wjob" => "required",
            ]);

            return $next($request);
        }
    }