<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = ''): Response
    {
        $user = $request->user();
        if ($user->hasRole($role)) {
            return $next($request);
        }
        abort(403, 'Akses ditolak. Maaf, kamu tidak memiliki izin untuk mengakses halaman ini. 
        Silakan hubungi administrator jika kamu merasa ini adalah kesalahan.');

    }
}