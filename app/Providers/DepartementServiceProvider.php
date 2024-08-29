<?php

namespace App\Providers;

use App\Services\DepartementService;
use App\Services\Impl\DepartementServiceImpl;
use Illuminate\Support\ServiceProvider;

class DepartementServiceProvider extends ServiceProvider 
{
    public array $singletons = [
        DepartementService::class => DepartementServiceImpl::class
    ];
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
        //
    }

    public function provides():array{
        return [DepartementService::class];
    }
}
