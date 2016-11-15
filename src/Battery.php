<?php

class Battery extends Product
{
    private $carModel;
    private $capasity;
    private $height;
    private $width;

    public function __construct( $brand, $seller, $price,$amount,$carModel, $capasity, $height, $width )
    {
        parent::__construct( $brand, $seller, $price,$amount);
        $this->carModel=$carModel;
        $this->capasity=$capasity;
        $this->height=$height;
        $this->width=$width;
    }

    public function getSum()
    {
        // TODO: Implement getSum() method.
    }


    public function getInfo()
    {
        return parent::getInfo()."For car: $this->carModel</br>"."A/h: $this->capasity</br>"."Proportions: h=$this->height, w=$this->width <hr>"; // TODO: Change the autogenerated stub
    }


}