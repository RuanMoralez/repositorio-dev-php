<?php

namespace app\controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\core\Controller;

/**
 * Description of IndexController
 *
 * @author Ruan Moralez
 */
class IndexController extends Controller{
    
    public function index(){
        $this->load("home");
    }
}
