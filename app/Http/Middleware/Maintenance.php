<?php

namespace App\Http\Middleware;

use App\Settings\GeneralSettings;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public $maintenance;
    public function __construct(GeneralSettings $settings)
    {
        $this->maintenance=$settings->maintenance;
    }
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() && $this->maintenance){
            return redirect('/maintenance');
        }
        return $next($request);
    }
}
