<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Carbon::setWeekendDays([Carbon::FRIDAY, Carbon::SATURDAY]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
