<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $table = 'departements';
    protected $primaryKey = 'id';
    protected $fillable=['name'];
    public $incrementing = false;
    protected $keyType = 'string';


    public function employees(){
        return $this->hasMany(Employee::class,'departement_id','id');
    }
}
