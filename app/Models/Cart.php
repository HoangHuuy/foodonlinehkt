<?php

namespace App\Models;

class Cart
{   
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    function __construct($oldCart){
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storeItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function DeleteItemCart($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function UpdateItemCart($id, $qty){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];

        $this->items[$id]['qty'] = $qty;
        $this->items[$id]['price'] = $qty * $this->items[$id]['item']->price;

        $this->totalQty += $this->items[$id]['qty'];
        $this->totalPrice += $this->items[$id]['price'];
    }
}