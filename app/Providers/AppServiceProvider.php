<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $company_info = DB::table('company_info')->first();
        view()->composer('*', function ($view) use ($company_info) {
            $view->with('company_info', $company_info);
        });
    }
}
