<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    public function state(){
        return $this->belongsTo(Statu::class,'id_state');
    }
    public function courts()
    {
        return $this->hasMany(Court::class,'id_client');
    }

}
