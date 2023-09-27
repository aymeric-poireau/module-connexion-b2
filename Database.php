<?php
class Database{
    public $pdo;

    public function __construct() {
        $conDatabase = new PDO("mysql:host=localhost;dbname=aymeric-poireau_mysql", 'aymeric-poireau', 'azertyqwerty345');
        $this->pdo = $conDatabase;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }  
    public function getPdo(){
        return $this->pdo;
    }
}
