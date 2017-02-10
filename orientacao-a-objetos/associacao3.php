<?php
class Aluno {
  public $nome;
  public $rg;
  public $dataDeNascimento;
  public $turma;
}

class Turma {
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;
}

$turma = new Turma;
$turma->periodo = "Manhã";
$turma->serie = "5";
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";

$aluno = new Aluno;
$aluno->nome = "Luiz Destefano";
$aluno->rg = "44.008.535-4";
$aluno->dataDeNascimento = "07/05/1987";
$aluno->turma = $turma;

echo "Nome: $aluno->nome\n";
echo "RG: $aluno->rg\n";
echo "Data de nascimento: $aluno->dataDeNascimento\n";
echo "Período: {$aluno->turma->periodo}\n";
echo "Série: {$aluno->turma->serie}\n";
echo "Sigla: {$aluno->turma->sigla}\n";
echo "Tipo de ensino: {$aluno->turma->tipoDeEnsino}\n";

 ?>
