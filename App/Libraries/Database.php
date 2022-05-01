<?php

class Database
{
    private $host = 'localhost';
    private $user = 'user_php_store';
    private $pass = 'r2GeB2P7paDu';
    private $Db_name = 'mvc';
    //private $db;

    public function __construct()
    {
        $host = $this->host;
        $user = $this->user;
        $pass = $this->pass;
        $db_name = $this->Db_name;
        //$db = $this->db;

        $options = [
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $dbh = new PDO('mysql:host='.$host.';dbname='. $db_name, $user, $pass, $options);
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

