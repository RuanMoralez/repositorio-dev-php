<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

/**
 * Description of Controller
 *
 * @author Ruan Moralez
 */
class Controller {
    public function load($viewName, $viewData = array()) {
        extract($viewData);
        include "app/views/{$viewName}.php";
    }
}
