<?php

namespace App\Providers;

use App\Services\KeysService;
use Illuminate\Support\ServiceProvider;
use YouCan\Pay\YouCanPay;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(YouCanPay::class, function ($app) {
            YouCanPay::setIsSandboxMode(true);

            return YouCanPay::instance()->useKeys(KeysService::getPrivateKey(), KeysService::getPublicKey());
        });
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
