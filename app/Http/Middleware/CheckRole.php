<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('notLogged')->with('error', 'You must be logged in to access this page.');
        }
        if ($role == 'admin' && $request->user()->admin !== null) {
            return $next($request);
        } elseif ($role == 'filmmaker' && $request->user()->filmmaker !== null) {
            return $next($request);
        } elseif ($role == 'client' && $request->user()->client !== null) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
