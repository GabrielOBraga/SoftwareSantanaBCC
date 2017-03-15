<?php
declare (strict_types=1);
namespace home\enterprise\cadastroProdutos;
use home\enterprise\Model;
use home\errors\InvalidArgument;
class Produto
{
    protected $ref;
    protected $descricao;
    protected $valor;
    protected $quantidade;

    /**
     * Produto constructor.
     * @param string $descricao
     * @param int $referencia
     * @param string $valor
     * @throws InvalidArgument
     */
    function __construct(string $descricao,int $referencia ,string $valor)
    {
        if($descricao== null || $referencia==null || $valor==null){
            throw new InvalidArgument("Todos os campos devem ser preenchidos.");
        }
        if(preg_match("/[^a-z]i/",$descricao)==1){
            throw new InvalidArgument("Descricao inválida. ");
        }
        if(preg_match("/[^0-9]/",$valor)==0 || preg_match("/[^a-z]i/",$valor)==1){
            throw new InvalidArgument("Valor Invalido.");
        }
        $this->descricao = $descricao;
        $this->ref = $referencia;
        $this->valor = $valor;
        $this->quantidade = 0;
    }

    /**
     * @return string
     */
    public function getDescricao():string
    {
        return $this->descricao;
    }

    /**
     * @return int
     */
    public function getQuantidade():int
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     * @throws InvalidArgument
     */
    public function addQuantidade(int $quantidade)
    {
        if ($quantidade < $this->quantidade){
            throw new InvalidArgument("Quantidade Vendida Menor que Estoque");
        }
        $this->quantidade = $quantidade + $this->quantidade;
    }

    /**
     * @return string
     */
    public function getValor(): string
    {
        return $this->valor;
    }

    /**
     * @return int
     */
    public function getRef(): int
    {
        return $this->ref;
    }

    /**
     * @param float $valor
     */
    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function getIdAttribute()
    {
        return 'ref';
    }

    /**
     * @return string
     * @throws InvalidArgument
     */
    public function  getClassName()
    {
        return 'Produto';


        if ($quantidade < $this->quantidade){
            throw new InvalidArgument("Quantidade Vendida Menor que Estoque");
        }
        $this->quantidade = $quantidade + $this->quantidade;
    }

}
