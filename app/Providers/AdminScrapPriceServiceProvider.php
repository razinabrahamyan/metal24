<?php

namespace App\Providers;

use App\Library\Admin\Contracts\AdminScrapPriceContract;
use App\Library\Admin\Services\AdminScrapPriceService;
use Illuminate\Support\ServiceProvider;

class AdminScrapPriceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminScrapPriceContract::class, function () {
            return new AdminScrapPriceService();
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
