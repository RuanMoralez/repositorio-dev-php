<?php

namespace app\core;

class Model {

    protected $db;

    public function __construct() {
        $this->db = new \PDO("mysql:dbname=".DATABASE.";host=".SERVER,USER,PASS);
    }

}
