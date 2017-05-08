<?php

namespace App;

class Cart{

    public $menuItems = null;
    public $totalQty = 0;
    public  $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->menuItems = $oldCart->menuItems;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addItemsToCart($item, $id){
        $storedItem = ['quantity'=>0, 'price'=>$item->price, 'item'=>$item];
        if($this->menuItems){
            if(array_key_exists($id, $this->menuItems)){
                $storedItem = $this->menuItems[$id];
            }
        }
        $storedItem['quantity']++;
        $storedItem['price']=$item->price*$storedItem['quantity'];
        $this->menuItems[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}