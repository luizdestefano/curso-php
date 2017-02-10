<?php
class Funcionario {
  public $nome;
  public $salario;

  public function aumentaSalario($valor) {
    $this->salario += $valor;
  }
}

$funcionario = new funcionario;
$funcionario->nome = "Luiz Destefano";
$funcionario->salario = 10000;

$funcionario->aumentaSalario(3000);

echo "Nome: $funcionario->nome\n";
echo "Salário com aumento: R$$funcionario->salario,00\n";

 ?>
