<?php
/* CART */

class Cart {
    private CartItem $item;
    private int $quantity;

    function __construct(CartItem $item, int $quantity)
    {
        $this->item = $item;
        $this->quantity = $quantity;
    }
}

