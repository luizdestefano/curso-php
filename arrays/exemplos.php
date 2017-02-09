<?php

$cursos = array("Python", "Ruby", "Matemagica com Gubi");

echo "$cursos[0]".PHP_EOL;

echo "$cursos[2]".PHP_EOL;

echo count($cursos).PHP_EOL; //devolve a quantidade de elementos

//Percorre Array
for ($i=0; $i < count($cursos); $i++) {
  echo "$cursos[$i]".PHP_EOL;
}

//Percorre o Array com o foreach
echo "....foreach....".PHP_EOL;
foreach ($cursos as $curso) {
  echo "$curso".PHP_EOL;
}

 ?>
