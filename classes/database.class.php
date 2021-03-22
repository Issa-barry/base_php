<?php
class Database {
    private $sgbd;
    private $host;
    private $dbname;
    private $charset;
    private $user;
    private $password;
    private $dsn;
    
    
    protected function connect(){
        $this->sgbd     = "mysql";
        $this->host     = "localhost";
        $this->dbname   = "admin1";
        $this->charset  = "UTF8";
        $this->user     = "root";
        $this->password = "";
        $this->dsn      = "$this->sgbd:host=$this->host;dbname=$this->dbname;charset=$this->charset";
     
    
        try {
            $pdo = new PDO($this->dsn, $this->user,  $this->password);
            $pdo->setAttribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }
}

 