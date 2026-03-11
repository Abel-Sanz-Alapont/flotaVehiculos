<?php

class Connection{
    protected $conn;
    private $configFile ="conf.json";//credenciales de conecxion de db

    public function __construct()
    {
        $this->makeConnection();
    }

    private function makeConnection(){

        $confiData = file_get_contents($this->configFile);
        $array=json_decode($confiData, true);
        $dsn ="mysql:host=".$array['host']. ";dbname=".$array['db'];
        $this->conn = new PDO($dsn, $array["userName"], $array["password"]);
    }
    

    public function getConn()
    {
        return $this->conn;
    }

    public function __destruct()
    {
        $this->conn=null;
    }
}