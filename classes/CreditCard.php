<?php
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