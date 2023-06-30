<?php

namespace App\Providers;

use App\Library\Admin\Contracts\AdminMetalPriceContract;
use App\Library\Admin\Services\AdminMetalPriceService;
use Illuminate\Support\ServiceProvider;

class AdminMetalPriceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminMetalPriceContract::class, function () {
            return new AdminMetalPriceService();
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
