<?php
class Conta {

  public $numero;
  public $saldo;
}

$conta = new Conta;
$conta->numero = 72;
$conta->saldo = 700;

echo "Número da conta: $conta->numero".PHP_EOL;
echo "Saldo da conta: $conta->saldo".PHP_EOL;

 ?>
