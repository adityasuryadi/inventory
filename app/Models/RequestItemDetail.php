<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestItemDetail extends Model
{
    protected $table = 'request_item_details';
    protected $primaryKey = 'id';
    protected $fillable=['id','product_id','product_name','location','unit','request_item_id','quantity'];
    public $incrementing = false;
    protected $keyType = 'string';
}
