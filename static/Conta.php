<?php

class Conta {
  public $numero; //atributo do objeto
  public $saldo; //atributo do objeto
  public static $contador; //atributo da classe

  public function __construct() {
    self::$contador++;
  }

  public static function zeraContador() { //método da classe
    echo "zeraContador sendo chamado".PHP_EOL;
    self::$contador = 0; //zera o contador
  }

}
 ?>
