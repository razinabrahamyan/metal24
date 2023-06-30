<?php

namespace App\Providers;

use App\Library\Services\Contracts\RoutingContract;
use App\Library\Services\RoutingService;
use Illuminate\Support\ServiceProvider;

class RoutingServiceProvider  extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RoutingContract::class, function () {
            return new RoutingService();
        });
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
