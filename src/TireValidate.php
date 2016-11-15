<?php


class TireValidate implements iValidate,iSellerValidate
{
    public function validateSeller()
    {
        // TODO: Implement validateSeller() method.
    }


    public function getValidate(Product $obj)
    {
        if (is_numeric($obj->price) && (is_numeric($obj->amount) && (is_numeric($obj->radius))))
            {
            return true;

        }else{
            return false;
        }
    }

}