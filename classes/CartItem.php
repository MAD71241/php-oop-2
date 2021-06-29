<?php
/* CART-ITEM */
class CartItem {
    private Product $product;
    private int $quantity;

    function __construct(Product $product, int $givenquantity)
    {
        $this->product = $product;
        $this->quantity = $givenquantity;
    }

    function getGivenQty () {
        return $this->givenquantity;
    }

    function setQty (int $givenquantity) {
        $this->quantity = $givenquantity;
    }
}