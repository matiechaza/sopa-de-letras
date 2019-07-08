<?php

namespace App\Http\Middleware;

use Closure;

final class AllowOnlyAjax
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
        if ( ! $request->ajax()) {
            return back()->withInfo('Solo se permiten solicitudes vía AJAX.');
        }

        return $next($request);
    }
}
