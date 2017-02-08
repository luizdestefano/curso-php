<?php
/*3 - Os bancos oferecem aos clientes a possibilidade de obter um cartão de crédito
que pode ser utilizados para fazer compras. Um cartão de crédito possui um número
e uma data de validade. Crie uma classe chamada CartaoDeCredito para modelar os
objetos que representarão os cartões de crédito.*/

class CartaoDeCredito {
    public $numero;
    public $dataDeValidade;
}

/*4 - Faça um teste criando dois objetos da classe CartaoDeCredito. Altere e
exiba no Console os valores armazenados nos atributos desses objetos.*/

$cartaoDeCredito = new CartaoDeCredito;
$cartaoDeCredito->numero=123456;
$cartaoDeCredito->dataDeValidade="07/05/2017";

$cartaoDeCredito2 = new CartaoDeCredito;
$cartaoDeCredito2->numero=234567;
$cartaoDeCredito2->dataDeValidade="25/12/2017";

echo "Número $cartaoDeCredito->numero\nData de validade $cartaoDeCredito->dataDeValidade\n\n";
echo "Número $cartaoDeCredito2->numero\nData de validade $cartaoDeCredito2->dataDeValidade\n\n";

?>
