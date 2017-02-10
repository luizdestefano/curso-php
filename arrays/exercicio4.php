<?php
$array = array("2", "8", "6", "4");

for ($i=0; $i < count($array); $i++) {
  //Verifica se é o primeiro parâmetro
  if ($i == 0) {
    //Se verdadeiro, apenas guarda o parametro na variavel
    $p = $array[$i];
  }else{
    //Se não for o primeiro, compara o atual com o anterior
    if ($array[$i] > $p) {
      //Se for maior, então atualiza o $p
      $p = $array[$i];
    }
  }
}

echo "O maior parâmetro é o: $p".PHP_EOL;

 ?>
