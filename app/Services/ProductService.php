<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface ProductService
{
    public function getProducts():Collection;
}