<?php

declare (strict_types=1);

namespace home\enterprise\persistence;

use src\enterprise\errors\IDnotFound;

class Model
{
    public static function load(int $id): PersistenceInterface
    {
        $contents=file_get_contents(static::getClassName().".txt");
        $strings= explode(PHP_EOL,$contents);
        $attribute=static::getIdAttribute();

        foreach ($strings as $str){
            $obj=unserialize($str);
            if ($id==(int)$obj->$attribute){
                return $obj;
            }
        }
        throw new IDnotFound();
    }
    public function delete()
    {
        $contents=file_get_contents($this->getClassName().".txt");
        $strings= explode(PHP_EOL,$contents);
        if ( $key=array_search( serialize($this), $strings)){
            if ($key === FALSE){
                throw new IDnotFound($this->getClassName()." Não encontrado");
            }
            unset($strings[$key]);
        }
        file_put_contents($this->getClassName() . ".txt", implode(
            PHP_EOL, $strings));
    }

    public function save()
    {
        $contents=file_get_contents($this->getClassName().".txt");
        $strings=[];
        if(!($contents==FALSE)){
            $strings= explode(PHP_EOL,$contents);
            $attribute=$this->getIdAttribute();
            foreach ($strings as &$str) {
                $obj = unserialize($str);
                if ($this->$attribute == $obj->$attribute) {
                    $str = serialize($this);
                    file_put_contents($this->getClassName() . ".txt", implode(
                        PHP_EOL, $strings));
                    return true;
                }
            }
        }
        $strings[]=serialize($this);
        file_put_contents($this->getClassName() . ".txt", implode(
            PHP_EOL, $strings));
    }

    public static function search(array $parameters = array()):array
    {
        $local = __DIR__.'/../../web/'.static::getClassName().".txt";
        $contents=file_get_contents($local);
        $strings= explode(PHP_EOL,$contents);
        $result = [];
        foreach ($strings as $str){
            $obj=unserialize($str);
            $flag = true;
            foreach ($parameters as $membro => $value){
                //$attribute=static::getIdAttribute();
                //call_user_func_array(static::getClassName(), array("get".$p));
                if($obj->$membro != $value){
                    $flag = false;
                }
            }
            if($flag){
                $result[] = $obj;
            }
        }
        return $result;
    }

    public function getIdAttribute()
    {
        return $this->getIdAttribute();
    }
    static public function  getClassName()
    {
        return $this->getClassName();
    }

}