<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Enriquecimento;
/**
 * Description of EnriquecimentoController
 *
 * @author Ruan Moralez
 */
class EnriquecimentoController extends Controller {

    public function index() {
        $this->load("home");
    }

    public function upload() {
        switch (empty($_FILES['arquivo']['name'])) {
            case true:
                $dado["id"] = "";
                $dado["mensagem"] = "<c style='color:red'>Por favor selecione um arquivo para que o enriquecimento seja feito.</c>";
                $dado["nome"] = "";
                $dado["newName"] = "";
                $dado["acao"] = "";
                $this->load("enriquecimento/template", $dado);
                break;
            case false:
                $arquivo = $_FILES['arquivo'];
                $nameFile = "";
                $nameFile = uniqid() . "_" . $arquivo['name'];
                move_uploaded_file($arquivo['tmp_name'], DIR_FILE . '/' . $nameFile);

                $dado["id"] = 1;
                $dado["mensagem"] = "<c style='color:green'>Arquivo enviado com sucesso!</c>";
                $dado["nome"] = $arquivo['name'];
                $dado["newName"] = $nameFile;
                $dado["acao"] = "<a href=".URL_BASE."enriquecimento/start/".$nameFile." class='btn btn-success'>Iniciar</a>";
                $this->load("enriquecimento/template", $dado);
                break;
        }
    }

    public function start($paran) {
        $e = new Enriquecimento($paran);
    }

}
