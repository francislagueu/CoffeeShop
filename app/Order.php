<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Menu;

class Order extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }

    public function menus(){
        $this->hasMany(Menu::class);
    }
}
