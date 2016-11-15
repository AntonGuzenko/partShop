<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.11.2016
 * Time: 20:45
 */
class Price

{
    static public $CURRENCY='$';
static public function show($price){
    echo sprintf('%.2f',$price)."     /n";
}
}