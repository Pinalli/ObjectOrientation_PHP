<?php

require_once 'src/Conta.php';



$c = new Conta('987.654.321-11','Thundercat');
/*$c -> cpf = '987.654.321-11';
$c -> nome = 'Thundercat';
$c -> saldo = 5600; */
var_dump($c);

$c1  = new Conta('123.456.789-10','Moonhah' );
/*$c1 -> cpf = '123.456.789-10';
$c1 -> nome = 'Moonhah';
$c1 -> saldo = 2500; */
$c -> depositar(2000);

$c1 -> depositar(5600);
//$c1 -> sacar(1200);
$c1 -> transferir(250, $c);

//var_dump($c); 
//var_dump($c1);
echo  "Nome: ",$c1 -> mostraNome() . PHP_EOL;
echo  "Cpf: ",$c1 -> mostraCPF() . PHP_EOL;
echo "Saldo: ",$c1 -> mostraSaldo()  . PHP_EOL;

