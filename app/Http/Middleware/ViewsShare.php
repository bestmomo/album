<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Category;

class ViewsShare
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
        view ()->share ('categories', Category::all ());

        return $next($request);
    }
}
