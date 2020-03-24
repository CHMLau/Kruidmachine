<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckGebruikersnaam
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if (Auth::user()->name) {
            // Do the thing you want ... (return or redirect to somewhere else)
            return $next($request);
        }
        return redirect('/allemixes');
    }
}
