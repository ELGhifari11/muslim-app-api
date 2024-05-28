<?php

namespace App\Providers;

use App\Services\QuranService;
use App\Services\PrayerTimeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(PrayerTimeService::class, function ($app) {
            return new PrayerTimeService(new \GuzzleHttp\Client);
        });

        $this->app->singleton(QuranService::class, function ($app) {
            return new QuranService(new \GuzzleHttp\Client);
        });
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
