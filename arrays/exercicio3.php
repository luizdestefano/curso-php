<?php
//$array = array("2", "4", "6", "8");

$soma = 0;

for ($i=0; $i < count($argv); $i++) {
  $soma += $argv[$i];
}

$media = $soma / count($argv) - 1;

echo "Média: $media".PHP_EOL;

?>
