<?php
//Crie um programa que exiba no Console um triângulo de *
for ($i=1; $i<6; $i++){

  for ($j=0; $j < $i; $j++){
    $linha .= "*";
  }
  echo $linha.PHP_EOL;
  $linha = "";
}

//Outra solução
$linha = "*";

for ($i=0; $i<5; $i++){
  echo $linha.PHP_EOL;
  $linha .="*";
}
?>
