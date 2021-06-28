<?php

class Product {
    private int $id;
    private string $name;
    private float $price;
    private int $qty;
    
    function __construct($id, $name, $price, $qty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }
}

class Cart {
    private array $items = [];

    public function addProduct(Product $product, int $quantity) {
        $cartItem = new CartItem;
    }
}

class CartItem {
    private Product $product;
    private int $quantity;
}