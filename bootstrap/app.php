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
<<<<<<< HEAD
        $middleware->web(append: [
            \App\Http\Middleware\AddContentLength::class
        ]);
=======
        //
>>>>>>> cbc2d63 (Laravelプロジェクトの初回コミット)
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
