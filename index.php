<?php

require 'vendor\autoload.php';
require 'app\core\Core.php';
require 'config\config.php';


$c = new app\core\Core();
$c->run();

/*
  echo "Controller: ".$c->getController()."<br>";
  echo "Metodo: ".$c->getMetodo()."<br>";

  foreach($c->getParametro() as $p){
  echo "Parametro: {$p} <br>";
  }
 */
?>
