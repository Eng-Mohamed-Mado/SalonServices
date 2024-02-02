<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //  Repository Intro
        $this->app->bind(
            // 'App\Http\Interfaces\GetdataRepositoryInterface',
            IntroRepoIntereface::class ,
            // 'App\Http\Eloquent\GetdataRepo',
            IntroRepo::class,

        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
