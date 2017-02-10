<?php
class Conta {
  public $numero;
  public $saldo;
  public $limite;
}

$conta = new Conta;
$conta->numero = 2499;
$conta->saldo = 700;
$conta->limite = 800;

echo "Número da conta: $conta->numero\n";
echo "Saldo da conta: $conta->saldo\n";
echo "Limite da conta: $conta->limite\n\n";


 ?>
