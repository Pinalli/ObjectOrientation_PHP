<?php
/*
https://youtu.be/u-w4eULRrr0?t=904 -> evitar Else
https://dorianneto.com.br/boas-praticas/torne-se-um-ninja-das-funcoes-com-early-return/.
https://pt.wikipedia.org/wiki/Programa%C3%A7%C3%A3o_orientada_a_objetos#Encapsulamento
*/

class Conta
{

    private  $titular;
    private  $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this -> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--; 
    }
    
    public function sacar(float $valorSaque)
    {
       if($valorSaque > $this -> saldo){
            echo "Saldo insuficiente" . PHP_EOL;
            return;
       } 
            $this -> saldo -= $valorSaque;
       
    }

    public function depositar(float $valorDeposito)
    {
        if($valorDeposito < 0){
            echo "Somente valores positivos" . PHP_EOL;
            return;
        }
            $this -> saldo += $valorDeposito;
        
    }

    public function transferir(float $valorTranferencia, Conta $contaDestino): void
    {
        if ($valorTranferencia > $this -> saldo){
            echo "Não há saldo suficiente para a transferência" . PHP_EOL;
            return;
        } 
            $this -> sacar($valorTranferencia);
            $contaDestino -> depositar($valorTranferencia);
        }

    public function getSaldo(): float
    {
       return $this -> saldo; 
    }

    public function getNomeTitular(): string
    {
        return $this->titular ->getNome();
    }

    public function getCpf(): string
    {
       return $this ->cpf -> getCpf();
    }

   
    public static function getNumContas():int
    {
        return self::$numeroDeContas;
    }
}
    

/*
function criaConta(string $cpf, string $nome, float $saldo)
{
    return [
        $cpf => [
            'titular' => $nome,
            'saldo' => $saldo,
        ]
  ];
} */