<?php 
namespace App\Services\Impl;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;
use App\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    public function getProducts():Collection{
        return Product::all();
    }
}   