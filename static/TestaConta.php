<?php

require_once 'Conta.php';

//echo "Contador: ".Conta::$contador.PHP_EOL;

$x = new Conta;
$x->numero = 11;
$x->saldo = 600;

$y = new Conta;
$y->numero = 12;
$y->saldo = 130;
echo "Contador no final: " . Conta::$contador . PHP_EOL;

Conta::zeraContador(); //Chama o método da classe

echo "Contador após zeraContador ".Conta::$contador.PHP_EOL;

 ?>
