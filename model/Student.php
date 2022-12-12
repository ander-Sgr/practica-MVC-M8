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

    public function updateStudent($data, $idUser)
    {
        $rows = array();
        foreach ($data as $key => $value) {
            $rows[] = "$key = :$key";
        }
        $query = "UPDATE estudiant SET " . implode(', ', $rows) . " WHERE $idUser";
        try {
            $stm = $this->conn->prepare($query);
            $stm->execute($data);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }


    public function insertStudent($data)
    {
        $keys = array_keys($data);
        $query = "INSERT INTO estudiant (". implode(',', $keys) . ") "
        . "VALUES(". ':' . implode(', :', $keys) . ")";
        try {
            $stm = $this->conn->prepare($data);
            $stm->execute($data);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
