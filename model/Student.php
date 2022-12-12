<?php

class Student
{

    private $conn;

    public function __construct(PDO $pdo)
    {
        $this->conn = $pdo;
    }

    public function selectAll()
    {
        $stm = $this->conn->prepare("select * from estudiant");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function showStudent($idUser)
    {
        $query = "select * from estudiant where {$idUser};";
        $result = $this->conn->query($query);
        $data = [];
        while ($rows = $result->fetchAll(PDO::FETCH_ASSOC)) {
            $data[] = $rows;
        }
        return $data;
    }

    public function updateStudent($data, $condicio){
        $rows = array();
        foreach ($data as $key => $value) {
            $rows[] = "$key = :$key";
        }
        // todo es query parametrizada
    }

}
