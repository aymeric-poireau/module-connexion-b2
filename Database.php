<?php
class Database{
    public $pdo;

    public function __construct() {
        $conDatabase = new PDO("mysql:host=localhost;dbname=moduleconnexionb2", 'root', '');
        $this->pdo = $conDatabase;
    }  
    public function getPdo(){
        return $this->pdo;
    }
}