<?php

namespace App\Http\Middleware;

use Closure;

class Settings
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
        if(auth()->check()) {
            $settings = json_decode(auth()->user()->settings);

            config(['app.pagination' => $settings->pagination]);
        }

        return $next($request);
    }
}
