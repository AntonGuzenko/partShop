<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.11.2016
 * Time: 18:56
 */
class BatteryValidate implements iValidate
{
    public function getValidate(Product $obj)
    {
        if (is_numeric($obj->price) && (is_numeric($obj->amount)))
        {
            return true;

        }else{
            return false;
        }
    }

}