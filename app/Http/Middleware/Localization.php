<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    $locales = ['en', 'fr', 'ar'];
    $locale = $request->segment(1);

    if(in_array($locale, $locales)){
        app()->setLocale($locale);
        session()->put('locale', $locale);
    } else {
        app()->setLocale(config('app.fallback_locale'));
    }

    return $next($request);
}
}
