<?php
require_once("Model/Conection.php");
require_once("Model/Student.php");
$controller = new ControllerStudent();
class ControllerStudent{
    private $model;

    function __construct()
    {
        $this->model = new Student(Conection::instance());
    }

    function showStudents()
    {
        $data = $this->model->selectAll();
        require_once("view/index.php");
    }

    function edit()
    {
        $id = $_REQUEST['user'];
        $data = $this->model->showStudent("id=" . $id);
        require_once('./view/edit.php');
    }

    function updateStudent(){
        
    }
}