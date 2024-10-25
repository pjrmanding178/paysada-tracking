<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class FirebaseAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('firebaseUser')) {
            return redirect()->route('login');
        }                        

        return $next($request);
    }
}
