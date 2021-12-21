<?php

class Product{
    public $name;
    public $price;
    public $isInStock = true;
}

class CreditCard{
    protected $cardNumber;
    protected $cardExpDate;
    protected $cvv;

    function __construct(int $cardNumber, int $cardExpDate, int $cvv)
    {
        $this->cardNumber = $cardNumber;
        $this->cardExpDate = $cardExpDate;
        $this->cvv = $cvv;
    }


}
class User extends CreditCard{
    public $name;
    public $lastName;
    public $email;

    function __construct($name, $lastName, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
    }

        public function AddCard($card){
        $this->cardNumber = $card->cardNumber;
        $this->cardExpDate = $card->cardExpDate;
        $this->cvv = $card->cvv;
    }
}

class PremiumUser extends User{


    public $discount = 10;

}

$user_1 = new User('giovanni', 'belda', 'gbelda@gmail.com');
$c = new CreditCard(12345678, 1022 ,233);
$user_1->AddCard($c);
var_dump($user_1);