<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    public function state(){
        return $this->belongsTo(Statu::class,'id_state');
    }
    
    public function customer(){
        return $this->belongsTo(Customer::class,'id_client');
    }
}
