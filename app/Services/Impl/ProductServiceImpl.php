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

    public function decrementProductStock(string $id, int $quantity):void{
        $product = Product::find($id);
        $product->stock = $product->stock - $quantity;
        $product->save();
    }
}   