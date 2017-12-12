<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 12/12/2017
 * Time: 11:02
 */

namespace src\enterprise\errors;


use Exception;

class IdnotFound extends Exception
{
    static  public  function  className(){
        return 'InvalidArgument';
    }
}