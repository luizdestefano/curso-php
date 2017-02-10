<?php
class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;

  public function __construct($numero,$agencia)
  {
    $this->numero = $numero;
    $this->agencia = $agencia;
  }

  public function deposita($valor) {
    $this->saldo += $valor;
  }

  public function saca($valor) {
    if($valor <= $this->saldo) {
      $this->saldo -= $valor;
      return TRUE;
    }else{
      return FALSE;
    }
  }

}

$conta = new Conta(123,321);
$conta->agencia = 1234;
//$conta->numero = 2499;
$conta->saldo = 700;
$conta->limite = 100;

$conta->deposita(700);
$conta->saca(400);

echo "Saldo da conta: $conta->saldo\n";
echo "Número da conta: $conta->numero\n";


 ?>
