<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable=['name','code','stock','location','unit','description'];
    public $incrementing = false;
    protected $keyType = 'string';
}
