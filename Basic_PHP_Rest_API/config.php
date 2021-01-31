<?php

class Database extends PDO {

    public function __constractor(){
        parent::__constractor("mysql:host=localhost,dbname=api",'root','',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => " SET NAMES utf8"));
            $this->setAttribute(PDO::_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);    
    }
}


?>