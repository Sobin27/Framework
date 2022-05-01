<?php

class Database
{
    private $host = 'localhost';
    private $user = 'user_php_store';
    private $pass = 'r2GeB2P7paDu';
    private $Db_name = 'mvc';
    private $stmt;
    private $dbh;

    public function __construct()
    {
        $user = $this->user;
        $pass = $this->pass;

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->Db_name;
        $options = [
        
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            
            $this->dbh = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo "Erro:". $e->getMessage();
            die();
        }
    }

    public function query($sql)
    {
        $db = $this->dbh;
        $this->stmt = $db->prepare($sql);
    }

    public function bind($params, $valor, $type = null)
    {
        if(is_null($type))
        {
            switch (true) {
                case is_int($valor):
                    $type = PDO::PARAM_INT;
                break;

                case is_bool($valor):
                    $type = PDO::PARAM_BOOL;
                break;

                case is_null($valor):
                    $type = PDO::PARAM_NULL;
                break;

                default:
                    $type = PDO::PARAM_STR;
                break;
            }
        }
        $this->stmt->bindValue($params, $valor, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function result()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function resultS()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function lines()
    {
        return $this->stmt->rowCount();
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }
}

