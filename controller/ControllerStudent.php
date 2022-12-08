<?php
include_once("./model/Student.php");
include_once("./model/Conection.php");


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
        require_once('view/edit.php');
    }
}