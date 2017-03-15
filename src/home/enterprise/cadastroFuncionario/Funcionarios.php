<?php
declare (strict_types=1);
namespace home\enterprise\cadastroFuncionario;
use home\enterprise\Model;
use home\errors\InvalidArgument;
class Funcionarios extends Model
{
    private $telefoneAux;
    protected $nome;
    protected $cpf;
    protected $dataNascimento;
    protected $telefone;
    protected $email;
    protected $endereco;
    protected $cep;
    protected $salario;
    protected $comissao;
    protected $nVendas;
    public function   __construct(string $nome, string $cpf , string $endereco, string $telefone){
        // verifica se os campos estão preeenchidos
        if($cpf == null || $nome == null || $endereco == null || $telefone == null){
            throw new InvalidArgument("Todos os campos devem ser preenchidos.");
        }
        // verifica se possui um número decente de caracteres
        if(strlen($endereco) < 5) {
            throw new InvalidArgument("Endereço inválido. ");
        }
        $telefone = $this->formatTelefone($telefone);
        if(preg_match("/[^0-9]/",$telefone)==1 || strlen($telefone) < 8 || strlen($telefone)>9){
            throw new InvalidArgument("Telefone deve conter apenas caracteres numéricos/telefone inválido.");
        }
        if(preg_match("/[^a-z]i/",$nome)==1){
            throw new InvalidArgument("Nome inválido. ");
        }
        if(!$this->validaCPF($cpf) == 'false'){
            throw new InvalidArgument("CPF inválido.");
        }
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    function formatTelefone($telefone) {

        $telefone = str_replace("-", "", $telefone);
        $telefone = str_replace(" ", "", $telefone);
        return $telefone;

    }

    function validaCPF(string $cpf = null){
        // Verifica se um número foi informado
        if(empty($cpf)) {
            return false;
        }
        // Elimina possivel mascara
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace(",", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        // Verifica se o numero de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return false;
            // Calcula os digitos verificadores para verificar se o
            // CPF é válido
        } else {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }
    public function setComissao(float $comissao)
    {
        $this->comissao = $comissao;
    }
    public function setVendas(int $vendas)
    {
        $this->vendas = $vendas;
    }
    public function setFone(string $fone)
    {
        $this->fone = $fone;
    }
    public function setNascimento(string $nascimento)
    {
        $this->dataNascimento = $nascimento;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }
    public function setNVendas($nVendas)
    {
        $this->nVendas = $nVendas;
    }
    public function getCpf ( ):int
    {
        return $this->cpf;
    }
    public function getNome ( ):string {
        return $this->nome;
    }
    public function getSalario():float
    {
        return $this->salario;
    }
    public function getComissao():float
    {
        return $this->comissao;
    }
    public function calcularSalario ()
    {
        $this->setSalario($this->getSalario() + $this->nVendas * $this->getComissao());
    }
    public function resetVendas ()
    {
        $this->vendas = 0;
    }
    public function getFone():string
    {
        return $this->telefone;
    }
    public function getIdAttribute()
    {
        return 'cpf';
    }
    public function  getClassName()
    {
        return 'Funcionarios';
    }
}
