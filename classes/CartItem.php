<?php
/* CART-ITEM */
class CartItem {
    private Product $product;
    public int $givenquantity;

    function __construct(Product $product, int $givenquantity)
    {
        $this->product = $product;
        $this->givenquantity = $givenquantity;
    }

    public function getGivenQty () {
        return $this->givenquantity;
    }

    function setQty (int $givenquantity) {
        $this->quantity = $givenquantity;
    }
}

$cart1 = new CartItem ($samsung, 2);
$cart2 = new CartItem ($tcl, 1);