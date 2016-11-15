<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.11.2016
 * Time: 21:28
 */
final class Singleton
{ private $amount=0;
    public $name="";


    public static function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Singleton();
        return $inst;
    }}
        public
        function setAmount($amount)
        {
            $this->amount = $amount;
        }

        public
        function getAmount($amount)
        {
            return $this->amount;
        }

        private
        function __construct()
        {

        }




    private function __clone(){

    }
}