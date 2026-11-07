<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('berhasil_login')) {
            return redirect()->route('login'); // pastikan route name 'login' benar
        }

        return $next($request);
    }
}
