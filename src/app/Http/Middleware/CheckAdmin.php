<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin == true) {
            return $next($request);
        }
        Session::flush();
        Session::flash('error', 'User credentials is invalid!');
        return redirect('/login');
    }
}
