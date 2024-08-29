<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable=['name','nik','departement_id'];
    public $incrementing = false;
    protected $keyType = 'string';
    
    public function departement(){
        return $this->belongsTo(Departement::class,'departement_id','id');
    }
}

