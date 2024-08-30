<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RequestItemDetails;
class RequestItem extends Model
{
    protected $table = 'request_items';
    protected $primaryKey = 'id';
    protected $fillable=['id','nik','request_no','request_date'];
    public $incrementing = false;
    protected $keyType = 'string';

    public function requestItemDetails(){
        return $this->hasMany(RequestItemDetail::class,'request_item_id','id');
    }

    public function employee(){
        return $this->belongsTo(Employee::class,'nik','nik');
    }
}
