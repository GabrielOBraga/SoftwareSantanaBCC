<?php

namespace home\tests\enterprise\cadastroProdutos;
use home\enterprise\cadastroProdutos\Produto;

class ProdutoTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the constructor's valor is stored correctly
     * @param string $descricao
     * @param string $referencia
     * @param string $valor
     * @dataProvider  providerTestConstructorValidValor
     */
    public function testConstructorValidValor (string $descricao ,int $referencia ,string $valor)
    {
        $prodObj1 = new Produto($descricao , $referencia , $valor);
        $this->assertEquals($prodObj1->getValor(),$valor);
    }
    /**
     * Test if the constructor's valor is stored correctly
     * @param string $descricao
     * @param string $referencia
     * @param string $valor
     * @dataProvider  providerTestConstructorInvalidValor
     * @expectedException \home\errors\InvalidArgument
     */
    public function testConstructorInvalidValor (string $descricao ,int $referencia ,string $valor)
    {
        $prodObj1 = new Produto($descricao , $referencia , $valor);
    }

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }
    public function providerTestConstructorValidValor (){
        return [
            ['Oculos',2345,'135.50'],
            ['Oculos de Led',3456,'80.00'],
            ['Oculos Azul',34565,'800.00']
        ] ;
    }
    public function providerTestConstructorInvalidValor (){
        return [
            ['Oculos',2345,'34.3er4'],
            ['Oculos de Led',3456,'1.1e']
        ] ;
    }
}
