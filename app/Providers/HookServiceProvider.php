<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Helpers\Hook::class, fn () => new \App\Helpers\Hook());
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
