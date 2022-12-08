<?php 

class Student{
    
    private $conn;

    public function __construct(PDO $pdo)
    {   
        $this->conn = $pdo;
    }

    public function selectAll(){
        $stm = $this->conn->prepare("select * from estudiant");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    
}