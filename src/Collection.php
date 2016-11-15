<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.11.2016
 * Time: 21:42
 */
class Collection
{
    private $values=[];
    public function __construct()
    {
    }

    public function __get($name)
    {
        echo "/n/n   getValueName $name/n/n";
       if(in_array($this->values,$name)){
           return$this->values[$name];
       }
       return false;
    }


    public function __set($name, $values)
    {
        $this->values[$name]=$values;
    }

}