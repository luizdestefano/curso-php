<?php

require_once 'Secretario.php';
require_once 'Gerente.php';

$gerente = new Gerente;
$gerente->nome = "Joelma";
$gerente->salario= 12000;
$gerente->senha = 1234;

$secretario = new Secretario;
$secretario->nome = "João";
$secretario->salario= 2000;
$secretario->ramal = 6241;

echo "Nome do gerente: ".$gerente->nome.PHP_EOL;
echo "Salário do gerente: ".$gerente->salario.PHP_EOL;
echo "Senha do gerente: ".$gerente->senha.PHP_EOL;
 ?>
