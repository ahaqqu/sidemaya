<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Providers\RouteServiceProvider;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if(!Auth::user()) {
             return redirect('login');
        }

        if (Auth::user() &&  Auth::user()->isAdmin()) {
             return $next($request);
        }

        return redirect('/')->with('error','You have not admin access');
    }
}
