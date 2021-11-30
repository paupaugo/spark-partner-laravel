<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\IDashboardRepository;
use App\Repositories\DashboardRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(IDashboardRepository::class, DashboardRepository::class);
    
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
