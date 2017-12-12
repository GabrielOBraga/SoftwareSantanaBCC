<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 08/03/2017
 * Time: 14:34
 */

namespace src\tests\enterprise\cadastroProdutos;
use src\enterprise\cadastroProdutos\Produto;
use src\tests\enterprise\cadastroServiceCar\ServicosCarTest;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{

    /**
     * Test if the constructor's name is stored correctly
     * @param string $descricao
     * @param int $ref
     * @param string $valor
     * @dataProvider  providerTestConstructorValidName
     */
    public function testConstructorValidRef ( string $descricao ,int $ref , string $valor)
    {
        $funcObj1 = new Produto($descricao,$ref ,  $valor);
        $this->assertEquals($ref , $funcObj1->getRef());
    }

    /**
     * Test if the constructor's name is stored correctly
     * @param string $descricao
     * @param int $ref
     * @param string $valor
     * @dataProvider  providerTestConstructorInvalidProduto
     * @expectedException \src\errors\InvalidArgument
     */
    public function testConstructorInvalidProduto ( string $descricao ,int $ref , string $valor)
    {
        $funcObj1 = new Produto($descricao , $ref ,  $valor);
    }


    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }

    public function providerTestConstructorValidName (){
        return [
            ['Uma descricao',45684,'Rua     ','0.00'],
            ['Gabriel Oliveira Braga',541357,'Av.      ','456.11']
        ] ;
    }

    public function providerTestConstructorInvalidProduto (){
        return [
            ['',215421 ,'650.00'],
            ['',54545,'550.00']
        ] ;
    }

}