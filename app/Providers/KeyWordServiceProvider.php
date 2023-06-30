<?php

namespace App\Providers;

use App\Library\Admin\Contracts\KeyWordContract;
use App\Library\Admin\Services\AdminKeyWordService;
use Illuminate\Support\ServiceProvider;

class KeyWordServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(KeyWordContract::class, function () {
           return new AdminKeyWordService();
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
