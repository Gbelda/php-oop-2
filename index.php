<?php

class Product{
    public $name;
    public $price;
    public $isInStock = true;
}

class User{
    public $name;
    public $lastName;
    public $email;

    function __construct($name, $lastName, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
    }
}

class PremiumUser extends User{
    public $discount = 10;

}