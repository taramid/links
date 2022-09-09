<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NanoidServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Hidehalo\Nanoid\Client::class, fn() => new \Hidehalo\Nanoid\Client());

//        $this->app->alias('NanoidClient', \Hidehalo\Nanoid\Client::class);
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
