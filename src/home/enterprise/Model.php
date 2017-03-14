<?php

declare (strict_types=1);

namespace home\enterprise;

class Model
{
    public function  save():int
    {
        $filepath = __DIR__.'/files/'. $this->getClassName().'.txt';

        $contents=@file_get_contents($filepath);
        if (!($contents===FALSE)) {
            $objects = explode(PHP_EOL, $contents);
            foreach ($objects as &$obj) {
                if (!$obj)  break;
                $serial = unserialize($obj);
                $attribute = $this->getIdAttribute();
                if ($serial->$attribute == $this->$attribute) {
                    $obj = serialize($this);
                    return file_put_contents(__DIR__.'/files/'. $this->getClassName() . '.txt', implode(PHP_EOL, $objects));
                }
            }
        }
        return file_put_contents(__DIR__.'/files/'. $this->getClassName().'.txt',serialize($this).PHP_EOL,FILE_APPEND);
    }

    public static function  load(int $id)
    {
        $contents=@file_get_contents(__DIR__.'/files/'. self::getClassName().'.txt');
        $objects=explode(PHP_EOL,$contents);
        foreach ($objects as $obj){
            if (!$obj)  break;
            $serial=unserialize($obj);
            $attribute = self::getIdAttribute();
            if ( $id == $serial->$attribute){
                return $serial;
            }
        }
        return null;
    }

    public function delete()
    {
        $contents=file_get_contents(__DIR__.'/files/'. $this->getClassName().'.txt');
        $contents=str_replace(serialize($this).PHP_EOL,'',$contents);
        file_put_contents($this->getClassName().'.txt',$contents) ;
    }

    public function getIdAttribute()
    {
        return $this->getIdAttribute();
    }
    public function  getClassName()
    {
        return $this->getClassName();
    }

}