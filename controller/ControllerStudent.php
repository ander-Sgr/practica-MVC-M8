<?php
require_once("Model/Conection.php");
require_once("Model/Student.php");
$controller = new ControllerStudent();
class ControllerStudent
{
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
        require_once('view/edit.php');
    }

    function updateStudent()
    {
        $id = $_REQUEST['id'];
        $arrData = array(
            "nom" => $_GET['nom'],
            "matricula" => $_GET['matricula'],
            "data" => $_GET['data'],
            "classe" => $_GET['classe']
        );
        $idUser = "id=" . $id;
        $this->model->updateStudent($arrData, $idUser);
        header("location: http://practica-mvc-m8.test/");
    }

    function viewAddStudent(){
        require_once('view/addStudent.php');
    }

    function insertStudiant(){
        $date = $_POST['date'];
        $dateFormated = date("Y-m-d", $date);
        $data = array("nom" => $_GET['nom'])
    }
}
