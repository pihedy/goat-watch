<?php declare(strict_types=1);

namespace App\Providers;

use \Illuminate\Support\ServiceProvider;

/**
 * This service provider does not have any specific services to register or bootstrap.
 *
 * @author Pihe Edmond <pihedy@gmail.com>
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /* Do Nothing. */
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /* Do Nothing. */
    }
}
