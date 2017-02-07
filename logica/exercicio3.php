<?php
//Percorra todos os números de 1 até 100. Para os números ímpares, deve ser exibido um * e para os números pares **
$numero = 1;

while ($numero <= 100) {
  //Verifica se o número atual é Par
  if ($numero % 2 == 0) { //se a condição for verdadeira, então o número é par
    echo "$numero **".PHP_EOL;
  }else{
    echo "$numero *".PHP_EOL;
  }
  $numero++;
}
 ?>
