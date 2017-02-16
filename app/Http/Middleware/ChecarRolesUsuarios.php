<?php

namespace App\Http\Middleware;

use Closure;

class ChecarRolesUsuarios
{
    public function handle($request, Closure $next, $rol)
    {
        if(auth()->user()->hasRoles($rol))
        {
            return $next($request);
        }

        return redirect('/');
    }
}
