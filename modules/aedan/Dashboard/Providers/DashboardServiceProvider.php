<?php

namespace aedan\Dashboard\Providers;
use Illuminate\Support\ServiceProvider;


class DashboardServiceProvider extends ServiceProvider{
    public function register()
    {
        //
    }

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../Routes/dashboard_route.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'Dashboard');
    }
}
