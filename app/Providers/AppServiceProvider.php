<?php

namespace App\Providers;

use App\Api\ExlineApi;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Locale;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ExlineApi::init();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function($view)
        {
            $services = Service::all();
            $count = 0;
            $countCartItems = Session::get('cart');
            if ($countCartItems != false ) {
                foreach ($countCartItems as $item) {
                    $count += $item['qty'];
                }
            }
            $locale = Locale::lang();
            $view->with('locale', $locale)->with('services', $services)->with('countCart', $count);
        });
    }
}
