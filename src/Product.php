<?php


 abstract class Product
{

    private $brand ="";
    protected $seller ;
    public $price =1;
    public $amount =1;

     public function __construct($brand,$seller,$price,$amount)
     { $this->brand=$brand;
         $this->seller=$seller;
         $this->price=$price;
         $this->amount=$amount;

     }

     abstract function getSum();



    public function getInfo()
    {
        return "Name: $this->brand </br>" . "Seller: $this->seller</br>" . "Price: $this->price $ USA</br>"."Amount: $this->amount</br>";

    }
}