<?php
class Connection{
    public $conn;
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=sql6.freemysqlhosting.net;dbname=sql6423673','sql6423673','Uv1IXYHttl');
        if($this->conn){
        }
    }
    public function getAll($query,$array){
        $statement = $this->conn->prepare($query);
        $statement->execute($array);
        return $statement->fetchAll();
    }
   
}
?>