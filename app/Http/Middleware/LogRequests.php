<?php

namespace App\Http\Middleware;

use App\Models\AuditLogs;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->method() != 'GET'){
            AuditLogs::query()->create([
                'user_id' => $request->user()?->id,
                'method' => $request->method(),
                'path' => $request->path(),
                'status_code' => $response->getStatusCode(),
                'payload' => json_encode($request->except('password')),
                'ip_address' => $request->ip()
            ]);
        }

        return $response;
    }
}
