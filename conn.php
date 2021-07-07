<?php
class Connection{
    public $conn;
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=sitebts','root','');
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