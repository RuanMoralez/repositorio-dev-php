<?php

namespace app\models;

use app\core\Model;

class Enriquecimento extends Model {

    public function __construct($paran) {
        parent::__construct();

        $aux = explode(".", $paran);
        $nome = array_shift($aux);

        try {
            $cmdSql = "
                CREATE TABLE " . $nome . " (
                    doc varchar(255)
                )";

            $res = $this->db->query($cmdSql);

            if (!$res->execute()) {
                echo "Tabela criada com sucesso!<br>";
                $this->import($nome,$paran);
            }
        } catch (Exception $e) {
            echo "Erro ao criar tabela: {$nome} /" . $e->getMessage();
        }
    }
    
    public function import($nome,$paran){
        try{
            $cmdSql ="
                BULK INSERT ".$nome."
                FROM ".URL_BASE."/views/enriquecimento/file/".$paran."
                WITH FIELDTERMINATOR = ';'
            ";
            
            $res = $this->db->query($cmdSql);
            if(!$res->execute()){
                echo "Aquivo importado com sucesso!<br>";
            }
        }catch(Exception $e){
            echo "Erro ao importar documento: {$paran}".$e->getMenssage();
        }
    }
}
