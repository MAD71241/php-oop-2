<?php 
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