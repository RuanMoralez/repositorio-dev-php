<?php

namespace app\controllers;
use app\core\Controller;

/**
 * Description of EnriquecimentoController
 *
 * @author Ruan Moralez
 */
class EnriquecimentoController extends Controller{
   
    public function index(){
        $this->load("enriquecimento/upload");
    }
    
    public function testar($valor=1){
        echo "Chamando o metodo da controller enriquecimento, valor: {$valor}<br>";
    }
    
    public function upload(){
        $dado = array();
        $dado["nome"] = "Ruan Moralez"; 
        $this->load("enriquecimento/upload",$dado);
    }
}
