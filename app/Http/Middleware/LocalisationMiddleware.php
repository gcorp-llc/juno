<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalisationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, string $lang = 'all'): Response
    {
        if ($lang != 'all') {
            App::setLocale($lang);
            App::setFallbackLocale($lang);
            Session::put('locale', $lang);
        } else {
            if (Session::has('locale')) {
                App::setLocale(Session::get('locale'));
                App::setFallbackLocale(Session::get('locale'));
            } else {
                App::setLocale('fa');
                App::setFallbackLocale('fa');
                Session::put('locale', 'fa');
            }
        }


        return $next($request);
    }
}
