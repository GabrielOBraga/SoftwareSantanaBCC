<?php
/**
 * Created by IntelliJ IDEA.
 * User: Alessandro
 * Date: 23/11/2017
 * Time: 11:14
 */

namespace src\enterprise;


interface PersistenceInterface
{
    public function save();
    public function delete();
    public static function load(int $id):PersistenceInterface;

    /**
     * Must return the Class Name
     * @return string
     */
    public static function getClassName():string;

    /**
     * Must return class id attribute's name, This attribute must be integer
     * @return string
     */
    public static function getIdAttribute():string;
}
