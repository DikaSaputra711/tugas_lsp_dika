<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCalonMahasiswaStatus
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'calon_mahasiswa') {
            if (Auth::user()->status === 'pending') {
                return redirect()->route('pending-notice');
            } elseif (Auth::user()->status === 'ditolak') {
                return redirect()->route('rejected-notice');
            }
        }

        return $next($request);
    }
}
