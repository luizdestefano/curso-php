<?php
/*1 - Implemente uma classe para definir os objetos que representarão os clientes de um banco. */
/*Essa classe deve possuir dois atributos: um para armazenar os nomes e outro para armazenar os códigos dos clientes.*/
class Cliente {
  public $nome;
  public $codigo;
}

/*2 - Faça um teste criando dois objetos da classe Cliente.
Altere e exiba no Console os valores armazenados nos atributos desses objetos.*/

$cliente = new Cliente;
$cliente->nome = 'Luiz Destefano';
$cliente->codigo = 17;

$cliente2 = new Cliente;
$cliente2->nome = 'Renan Barbosa';
$cliente2->codigo = 18;

//echo "Nome $cliente->nome".PHP_EOL;
//echo "Código $cliente->codigo".PHP_EOL;

//echo "Nome $cliente2->nome".PHP_EOL;
//echo "Código $cliente2->codigo".PHP_EOL;

?>
