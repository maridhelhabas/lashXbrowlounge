<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */

    
    protected $middlewareGroups = [
        'web' => [
            // ...
            \App\Http\Middleware\Authenticate::class,
            \App\Http\Middleware\RedirectIfNotAuthenticated::class,
            \App\Http\Middleware\PreventBackButton::class,
            \App\Http\Middleware\PreventBrowserBackHistory::class,
        ],

        'api' => [
            'throttle:api',
            'bindings',
        ],
    ];


    protected $routeMiddleware = [
        // ...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'redirectIfNotAdmin' => \App\Http\Middleware\RedirectIfNotAdmin::class,
        'authenticateAdmin' => \App\Http\Middleware\AuthenticateAdmin::class,
        'auth' => \App\Http\Middleware\Authenticate::class,
        'redirectIfNotAuthenticated' => \App\Http\Middleware\RedirectIfNotAuthenticated::class,
        'prevent_back' => \App\Http\Middleware\PreventBackButton::class,
    ];

}
