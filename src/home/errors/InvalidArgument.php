<?php

namespace home\errors;


class InvalidArgument extends \Exception
{
    static  public  function  className(){
        return 'InvalidArgument';
    }
}