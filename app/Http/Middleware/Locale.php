<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        if(!session()->has('locale')) {
            session(['locale' => $request->getPreferredLanguage(config('app.locales'))]);
        }

        app()->setLocale(session('locale'));

        setlocale(LC_TIME, session('locale'));

        return $next($request);
    }
}
