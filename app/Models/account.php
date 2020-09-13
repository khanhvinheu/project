<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    protected $guarded=[];
    // public function account(){
    // 	return $this->hasMany('App\account','AccountID','id');
    // }
}
