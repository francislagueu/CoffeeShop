<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Order;

class Menu extends Model
{
    public function order(){
        $this->belongsTo(Order::class);
    }
}
