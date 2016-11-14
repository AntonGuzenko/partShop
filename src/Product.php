<?php


 abstract class Product
{

    private $brand = "name Brend";
    private $seller = "name seller";
    private $price = 0;
    private $amount;



    public function __construct($brand,$seller,$price,$amount)
    { $this->brand=$brand;
      $this->seller=$seller;
      $this->price=$price;
      $this->amount=$amount;

    }

    public function getInfo()
    {
        return "Name: $this->brand </br>" . "Seller: $this->seller</br>" . "Price: $this->price $ USA</br>"."Amount: $this->amount</br>";

    }
}