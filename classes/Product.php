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
}