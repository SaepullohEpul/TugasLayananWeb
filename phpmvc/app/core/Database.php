<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $pdo = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($pdo, $this->user, $this->pass, $option);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
        return $this;
    }

    public function bind($param, $value, $type = null)
    {
        if( is_null($type) ){
            switch( true ){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
        return $this;
    }

    public function execute()
    {
        if ($this->stmt){
            this->stmt->execute();
        } else {
            throw new Exception("Statement is not initialized. Call query() method before execute()");
        }
        return $this;
    }

    public function resultSet()
    {
        if ($this->stmt) {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            throw new Exception("Statement is not initialized. Call query() method before resultSet()");
        }
    }

    public function single()
    {
        if ($this->stmt) {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            throw new Exception("Statement is not initialized. Call query() method before single()");
        }
    }
}
