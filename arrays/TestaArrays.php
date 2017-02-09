<?php

$cursos = array("CUR003" => "Python", "Ruby", "Matemagica com Gubi");

$cursos[] = "Lógica de Programação com Java"; //adicionando

$cursos[] = "HTML, CSS, JS";

var_dump($cursos);

foreach ($cursos as $x => $valor) {
  echo "Chave $x, valor: $valor".PHP_EOL;
}

 ?>
