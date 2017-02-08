<?php

require_once('cliente.php');

class CartaoDeCredito {
  public $numero;
  public $dataDevalidade;
  public $cliente;
}

$cartaoDeCredito = new CartaoDeCredito;
$cartaoDeCredito->numero = '123456';
$cartaoDeCredito->dataDevalidade = '07/05/2017';
$cartaoDeCredito->cliente = $cliente;
$cartaoDeCredito->cliente = $cliente;

echo "Número $cartaoDeCredito->numero\n";
echo "Data de validade $cartaoDeCredito->dataDevalidade\n";
echo "Nome {$cartaoDeCredito->cliente->nome}\n";
echo "Código {$cartaoDeCredito->cliente->codigo}\n\n"

?>
