<?php


// https://martinfowler.com/bliki/ValueObject.html

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

/*$c -> cpf = '987.654.321-11';
$c -> nome = 'Thundercat';
$c -> saldo = 5600; */

$c1 = new Titular(new CPF('987.654.321-11'),'Thundercat');
$conta1  = new Conta($c1);
$c2  = new Titular(new CPF('456.456.789-60'),'Annah' );
$conta2  = new Conta($c2 );
/*$c1 -> cpf = '123.456.789-10';
$c1 -> nome = 'Moonhah';
$c1 -> saldo = 2500; */
//$c -> depositar(2000);

$conta1 -> depositar(3500);
$conta2 -> depositar(2000);

$conta1 -> sacar(1000);
$conta1 -> transferir(250, $conta2);


//var_dump($c);
var_dump($conta1);
var_dump($conta2);
//var_dump($c3) . PHP_EOL; 

/*echo  "Nome: ",$conta1 -> getNomeTitular() . PHP_EOL;
echo  "Cpf: ", $conta1 -> getCpf() . PHP_EOL;
echo "Saldo: ",$conta1 -> getSaldo()  . PHP_EOL;
echo  "Nome: ",$conta2 -> getNomeTitular() . PHP_EOL;
echo  "Cpf: ",$conta2 -> getCpf(). PHP_EOL;
echo "Saldo: ",$conta2 -> getSaldo()   . PHP_EOL;
//echo  "Nome: ",$c3 -> getNomeTitular() . PHP_EOL;
//echo "Saldo: ",$c3 -> getSaldo()  . PHP_EOL; */
echo "Numero de contas: ", Conta::getNumContas();