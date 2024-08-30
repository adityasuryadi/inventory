<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface ProductService
{
    public function getProducts():Collection;
    public function decrementProductStock(string $id, int $quantity):void;
}