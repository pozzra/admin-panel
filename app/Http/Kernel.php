<?php
namespace App\Http;
use App\Http\Middleware\LanguageSwitcher;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array<int, class-string<\Illuminate\Http\Middleware\TrustHosts>>
     */
    protected $middleware = [
        // ...
    ];

    /**
     * The application's route middleware.
     *
     * @var array<string, class-string>
     */
    protected $routeMiddleware = [
        // ...
    ];

    /**
     * The application's middleware groups.
     *
     * @var array<string, array<int, class-string>>
     */
    protected $middlewareGroups = [
        'web' => [
            // ...
            \App\Http\Middleware\LanguageSwitcher::class,
        ],
    ];


}