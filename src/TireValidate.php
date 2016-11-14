<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.11.2016
 * Time: 9:55
 */
class TireValidate implements iValidate
{
    public function getValidate( $obj)
    {
        if (is_numeric($obj->price && $obj->amount)){
            return true;

        }else{
            return false;
        }
    }

}