<?php 

class Product {
    use CallableId;
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

}

class Television extends Product {
    use CallableId;

    function __construct($id, $name, $price, $qty, $inches, $videotech)
    {
        parent::__construct($id, $name, $price, $qty);
        $this->inches = $inches;
        $this->videotech = $videotech;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of qty
     */ 
    public function getQty()
    {
        return $this->qty;
    }
}

$tcl = new Television(12, "TCL Silver", 290, 1, 55, "OLED");
$samsung = new Television(10, "Samsung OLED 55'", 750, 1, 55, "OLED");