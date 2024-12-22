<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web([
            \App\Http\Middleware\Maintenance::class,
        ]);
        $middleware->alias([
            "localisation"=> \App\Http\Middleware\LocalisationMiddleware::class,
            'SEOMeta'       => Artesaos\SEOTools\Facades\SEOMeta::class,
            'OpenGraph'     => Artesaos\SEOTools\Facades\OpenGraph::class,
            'Twitter'       => Artesaos\SEOTools\Facades\TwitterCard::class,
            'JsonLd'        => Artesaos\SEOTools\Facades\JsonLd::class,
            'JsonLdMulti'   => Artesaos\SEOTools\Facades\JsonLdMulti::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
