<?php
declare (strict_types=1);
namespace home\enterprise\cadastroFuncionario;
use home\enterprise\errors\InvalidCPF;
use home\enterprise\persistence;
use home\errors\InvalidArgument;

class Funcionarios extends Model
{
    /**
     * @var string
     */
    private $telefoneAux;
    /**
     * @var string
     */
    protected $nome;
    /**
     * @var string
     */
    protected $cpf;
    /**
     * @var string
     */
    protected $dataNascimento;
    /**
     * @var string
     */
    protected $telefone;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $endereco;
    /**
     * @var string
     */
    protected $cep;
    /**
     * @var float
     */
    protected $salario;
    /**
     * @var integer
     */
    protected $comissao;
    /**
     * @var integer
     */
    protected $nVendas;

    /**
     * Funcionarios constructor.
     * @param string $nome
     * @param string $cpf
     * @param string $endereco
     * @param string $telefone
     * @throws InvalidArgument
     * @throws InvalidCPF
     */
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
            throw new InvalidCPF("CPF inválido.");
        }
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
    }

    /**
     * @param string $telefone
     * @return string
     */
    function formatTelefone($telefone) {

        $telefone = str_replace("-", "", $telefone);
        $telefone = str_replace(" ", "", $telefone);
        return $telefone;

    }

    /**
     * @param string $cpf
     * @return bool
     */
    function validaCPF(string $cpf){
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

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param float $salario
     */
    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }

    /**
     * @param float $comissao
     */
    public function setComissao(float $comissao)
    {
        $this->comissao = $comissao;
    }

    /**
     * @param int $vendas
     */
    public function setVendas(int $vendas)
    {
        $this->vendas = $vendas;
    }

    /**
     * @param string $fone
     * @return bool
     */
    public function setFone(string $fone):bool
    {
        $this->fone = $fone;
        return true;
    }

    /**
     * @param string $fone
     * @return mixed
     */
    public function formatFone(string $fone){
        $telefone = $this->formatTelefone($fone);
        return $telefone;
    }

    /**
     * @param string $nascimento
     */
    public function setNascimento(string $nascimento)
    {
        $this->dataNascimento = $nascimento;
    }

    /**
     * @param $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @param $nVendas
     */
    public function setNVendas($nVendas)
    {
        $this->nVendas = $nVendas;
    }

    /**
     * @return string
     */
    public function getCpf ( ):string
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getNome ( ):string {
        return $this->nome;
    }

    /**
     * @return float
     */
    public function getSalario():float
    {
        return $this->salario;
    }

    /**
     * @return float
     */
    public function getComissao():float
    {
        return $this->comissao;
    }

    /**
     * @return float
     * Retorna o salário calculado
     */
    public function calcularSalario ()
    {
        $this->setSalario($this->getSalario() + $this->nVendas * $this->getComissao());
        return $this->getSalario();
    }

    /**
     * @info zera o valor das vendas
     */
    public function resetVendas ()
    {
        $this->vendas = 0;
    }

    /**
     * @return string
     */
    public function getFone():string
    {
        return $this->telefone;
    }

    /**
     * @return string
     */
    public function getIdAttribute()
    {
        return 'cpf';
    }

    /**
     * @return string
     */
    public function  getClassName()
    {
        return 'Funcionarios';
    }

    /**
     * @return string
     */
    public function label($atributo): string
    {
        if($atributo == 'id_cpf'){
            return "\n Cpf: ";
        }
    }
}
