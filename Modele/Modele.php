<?php

require_once 'config.inc.php';

class Modele {
    protected $_bdd;

    public function __construct() {
        try {
            $pdoOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->_bdd = new PDO('mysql:host=' . SERVEURBD . ';dbname=' . 
                    NOMDELABASE, LOGIN, MOTDEPASSE, $pdoOptions);
                //echo 'BDD ouverte';
        } catch (PDOException $ex) {
            die('<br />Problème de connexion serveur BD : ' . $ex->getMessage());
        }
    }
    
    public function __destruct() {
        unset($this->_bdd);
    }
}