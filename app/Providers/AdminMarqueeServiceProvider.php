<?php

namespace App\Providers;

use App\Library\Admin\Contracts\AdminMarqueeContract;
use App\Library\Admin\Services\AdminMarqueeService;
use Illuminate\Support\ServiceProvider;

class AdminMarqueeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminMarqueeContract::class, function () {
            return new AdminMarqueeService();
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
