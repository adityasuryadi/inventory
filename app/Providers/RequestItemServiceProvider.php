<?php

namespace App\Providers;

use App\Services\Impl\RequestItemServiceImpl;
use App\Services\RequestItemService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RequestItemServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        RequestItemService::class => RequestItemServiceImpl::class
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
        return [RequestItemService::class];
    }
}
