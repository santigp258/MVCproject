<?php

class Connection{
    protected $db;

    private $drive = 'mysql';
    private $host = 'localhost';
    private $dbname = 'mvc';
    private $user = 'root';
    private $password = '';


    public function __construct()
    {
        try{
            $db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(PDOException $e){
            echo 'Connection error: details' . $e->getMessage();
        }        
    }

}