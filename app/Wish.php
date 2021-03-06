<?php

namespace App;

class Wish
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldWish)
    {
        if ($oldWish) {
            $this->items = $oldWish->items;
            $this->totalQty = $oldWish->totalQty;
            $this->totalPrice = $oldWish->totalPrice;
        }
    }

    public function add2($item, $id) {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

   
}
