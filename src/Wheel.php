<?php


class Wheel extends Product
{
    public $size;
    public $radius;


    public function __construct($brand, $seller, $price,$amount, $size,$radius)
    {
        parent::__construct( $brand, $seller, $price,$amount);
        $this->size=$size;
        $this->radius=$radius;

    }

    public function getSum( )
    {
        // TODO: Implement getSum() method.
    }

    public function getInfo()
    {
        return parent::getInfo()."Radius: $this->radius</br>"."Size: $this->size</br>"; // TODO: Change the autogenerated stub
    }


}