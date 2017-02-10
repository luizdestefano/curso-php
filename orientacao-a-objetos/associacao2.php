<?php

require_once('Agencia.php');

class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;
}

$conta = new Conta;
$conta->numero = 1238;
$conta->saldo = 500;
$conta->limite = 1000;
$conta->agencia = $agencia;

echo "Agência:\n{$conta->agencia->numero}\n\n";
echo "Conta:\nNúmero: $conta->numero\nSaldo: $conta->saldo\nLimite: $conta->limite\n\n";
 ?>
