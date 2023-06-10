<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    
    public function handle($request, Closure $next)
    {
        
        	if (! $request->user()->role_id == 1) {
        		$ruolo = $request->user()->role_id ;
        		$uto = $request->user()->name;
            return redirect()->route('home')->with('error','Your provided information wrong!' . $uto . 'whith role ' .$ruolo);
        }return $next($request);
    }
}