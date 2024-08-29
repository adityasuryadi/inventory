<?php

namespace App\Providers;

use App\Services\EmployeeService;
use App\Services\Impl\EmployeeServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class EmployeeServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        EmployeeService::class => EmployeeServiceImpl::class
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
        return [EmployeeService::class];
    }
}
