<?php

namespace app\controllers;

use app\core\Controller;

/**
 * Description of EnriquecimentoController
 *
 * @author Ruan Moralez
 */
class EnriquecimentoController extends Controller {
    public $nameFile;

    public function index() {
        $this->load("template");
    }
    
    public function testar($valor = 1) {
        echo "Chamando o metodo da controller enriquecimento, valor: {$valor}<br>";
    }
    
    public function upload() {
        
        $this->load("enriquecimento/upload");
       
        if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['name'])){
            $arquivo = $_FILES['arquivo'];
                        
            $aux = explode('.',$arquivo['name']);
            $aux = end($aux);
            
            $this->nameFile = uniqid().'_'.$arquivo['name'];
            
            if(!move_uploaded_file($arquivo['tmp_name'],DIR_FILE.'/'.$this->nameFile)){
                echo "Erro ao enviar arquivo";
            }else{
                echo "<spam style='color:green;'>Arquivo enviado com sucesso!</spam><br>Nome: ".$arquivo['name']."<br><br>";
                echo "<a href='".URL_BASE."enriquecimento/start' class='btn btn-primary'>Start</a>";
            }
        }else{
            echo "<spam style='color:red'>Por favor selecione um arquivo para que o enriquecimento seja feito.";
        }
    }
    
    public function start(){
        echo "Iniciando o enriquecimeto";
    }
}
