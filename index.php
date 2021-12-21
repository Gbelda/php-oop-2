<?php

class Product{
    public $name;
    protected $price;
    protected $isInStock = true;

    function __construct(String $name, float $price, bool $isInStock){
        $this->name = $name;
        $this->price = $price;
        $this->isInStock = $isInStock;
    }
}

class CreditCard{
    protected $cardNumber;
    protected $cardExpDate;
    protected $cvv;

    /**
     *  @param int $cardNumber insert card 16-digit number
     * @param string $cardExpDate insert expiration date MM/YY
     * @param int $cvv insert 3-digit code from back of the card
     */

    function __construct(int $cardNumber, string $cardExpDate, int $cvv)
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
$c = new CreditCard(123456789101123, '10/22' ,233);
$user_1->AddCard($c);
var_dump($user_1);


$user_2 = new PremiumUser('john', 'doe', 'johndoe@gmail.com');
$c2 = new CreditCard(213452313212312, '12/25', 342);
$user_2->AddCard($c);
var_dump($user_2);