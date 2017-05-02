<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Order;

class Menu extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'image', 'size','process'
    ];

    public function order(){
        $this->belongsTo(Order::class);
    }
}
