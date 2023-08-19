<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HashPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    $senha = $request->input('senha');
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $request->merge(['senha' => $hash]);

    return $next($request);
}
}
