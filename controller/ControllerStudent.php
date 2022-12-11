<?php

use function PHPSTORM_META\type;

include_once("model/Student.php");
include_once("model/Conection.php");
$controller = new ControllerStudent();


class ControllerStudent{
    private $model;

    function __construct()
    {
        $this->model = new Student(Conection::instance());
    }

    function showStudents(){
        $data = $this->model->selectAll();
        require_once("./view/mostrar.php");
    }

    function edit(){
        $id = $_REQUEST['user'];
        $idInt = (int) $id;
        $data = $this->model->show("estudiant", "id=" . $id);
        require_once('./view/edit.php');
    }

    
}