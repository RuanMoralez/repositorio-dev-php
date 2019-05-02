<?php

namespace app\core;

/**
 * Description of Core
 *
 * @author Ruan Moralez
 */
class Core {

    private $controller;
    private $metodo;
    private $parametro = array();
    
    public function __construct() {
        $this->verificarUrl();
    }
    
    public function run(){
        $controllerCorrente = $this->getController();
        $c = new $controllerCorrente;
        
        call_user_func_array(array($c,$this->getMetodo()), $this->getParametro());
    }

    public function verificarUrl() {
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);

        if ($url != "") {
            $url = explode("/", $url);
            array_shift($url);
            
            $this->controller = ucfirst($url[0])."Controller";
            array_shift($url);
            
            if(isset($url[0])){
                $this->metodo = $url[0];
                array_shift($url);
            }
            
            if(isset($url[0])){
                $this->parametro = array_filter($url); 
            }
        } else {
            $this->controller = ucfirst(CONTROLLER_PADRAO)."Controller";
        }
    }

    function getController() {
        if(class_exists(NAMESPACE_PADRAO.$this->controller)){
            return NAMESPACE_PADRAO.$this->controller;
        }
        return NAMESPACE_PADRAO. ucfirst(CONTROLLER_PADRAO)."Controller";
    }

    function getMetodo() {
        if(method_exists(NAMESPACE_PADRAO.$this->controller, $this->metodo)){
            return $this->metodo;
        }
        return METODO_PADRAO;
    }

    function getParametro() {
        return $this->parametro;
    }

}
