<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario está autenticado
        if (!auth()->check()) {
            return response()->json(['message' => 'No autenticado'], 401);
        }

        // Verificar si el usuario es admin
        if (auth()->user()->role !== 'admin') {
            return response()->json(['message' => 'No tienes permiso para realizar esta acción. Se requiere rol de administrador.'], 403);
        }

        return $next($request);
    }
}
