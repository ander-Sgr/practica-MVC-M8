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
        $query = "INSERT INTO estudiant (" . implode(',', $keys) . ") "
            . "VALUES(" . ':' . implode(', :', $keys) . ")";
        try {
            $stm = $this->conn->prepare($query);
            $stm->execute($data);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }


    public function showAssistence()
    {
        $query = "select data, 
                  SUM(present = 1) as num_present,
                  SUM(absent = 1) as num_absent
                from assistencia group by data";
        $stm = $this->conn->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertAssistence($data)
    {
        $keys = array_keys($data);
        $query = "INSERT INTO assistencia (" . implode(',', $keys) . ") VALUES(" . ':' . implode(', :', $keys) . ")";
        try {
            $stm = $this->conn->prepare($query);
            $stm->execute($data);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function showInfoAssistence($dateAssistence)
    {
        /**SELECT  e.nom, a.data, a.present, a.absent FROM assistencia a
            INNER JOIN estudiant e ON a.data = '2022-11-14' AND e.id = a.estudiant_id */
        $query = "SELECT e.id idEstudiant, e.nom nomEstudiant, a.data data, a.present present, a.absent absent FROM assistencia a
                 INNER JOIN estudiant e ON a.data='{$dateAssistence}' AND  e.id = a.estudiant_id";

        $result = $this->conn->query($query);
        $data = [];
        while ($rows = $result->fetchAll(PDO::FETCH_ASSOC)) {
            $data[] = $rows;
        }
        return $data;
    }

    public function editAssistence($data, $condition)
    {
        $rows = array();
        foreach ($data as $key => $value) {
            $rows[] = "$key = :$key";
        }
        $query = "UPDATE assistencia SET " . implode(', ', $rows) . " WHERE $condition";
        try {
            $stm = $this->conn->prepare($query);
            $stm->execute($data);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
