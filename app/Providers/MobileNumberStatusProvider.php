<?php

namespace App\Providers;

use App\Models\MobilePhoneNumber;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MobileNumberStatusProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('mobile_phone_numbers')) {
            $status = MobilePhoneNumber::query()->find(1);
            View::composer('*', function ($view) use ($status) {
                return $view->with([
                    'mobile_phone_status' => $status->status ?? 'up',
                ]);
            });
        }
    }
}
