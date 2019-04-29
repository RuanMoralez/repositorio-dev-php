<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
    </body>
</html>