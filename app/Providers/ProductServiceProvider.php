<?php

namespace App\Providers;

use App\Services\Impl\ProductServiceImpl;
use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public array $singletons = [
        ProductService::class => ProductServiceImpl::class
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
        return [ProductService::class];
    }
}
