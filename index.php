<?php

class Product {
    protected int $id;
    protected string $name;
    protected float $price;
    protected int $qty;
    
    function __construct($id, $name, $price, $qty)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getId () {
        return $this->id;
    }

    public function getName () {
        return $this->name;
    }

    public function getQty () {
        return $this->qty;
    }
}

class Television extends Product {

    function __construct($id, $name, $price, $qty, $inches, $videotech)
    {
        parent::__construct($id, $name, $price, $qty);
        $this->inches = $inches;
        $this->videotech = $videotech;
    }
}

$tcl = new Television(12, "TCL Silver", 290, 1, 55, "OLED");
var_dump($tcl);

/* USERS */

class User {
    protected string $name;
    public string $username;
    protected string $payment_method;
    protected string $gender;
    protected string $language;

    function __construct($name, $username, $payment_method, $gender, $language)
    {
        $this->name = $name;
        $this->username = $username;
        $this->payment_method = $payment_method;
        $this->gender = $gender;
        $this->language = $language;
    }
}

/* CREDIT-CARD */
class CreditCard
{
    protected $owner_name;
    protected $owner_lastname;
    protected $number;
    protected $deadline;
    protected $cvc;

    public function __construct(string $name, string $lastname, int $number, int $deadline, int $cvc ) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->number = $number;
        $this->deadline = $deadline;
        $this->cvc = $cvc;
    }
}

/* CART */
class Cart {
    private array $items = [];

    public function addProduct(Product $product, int $itemquantity) {
    }
}


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