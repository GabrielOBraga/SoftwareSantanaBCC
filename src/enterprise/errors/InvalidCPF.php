<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 12/12/2017
 * Time: 12:08
 */

namespace src\enterprise\errors;

use Exception;

class InvalidCPF extends Exception
{

    static  public  function  className(){
        return 'InvalidArgument';
    }
}