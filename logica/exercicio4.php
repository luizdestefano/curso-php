<?php
//Percorra todos os números de 1 até 100. Para os números múltiplos de 4, exiba a palavra PIN, e para os outros, exiba o próprio número.

$numero = 1;

while ($numero <= 100) {
  //Verifica se o número atual é Par
  if ($numero % 4 == 0) { //se a condição for verdadeira, então o número é par
    echo "PIN".PHP_EOL;
  }else{
    echo "$numero".PHP_EOL;
  }
  $numero++;
}
 ?>
