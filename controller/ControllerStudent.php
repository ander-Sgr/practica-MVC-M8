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
        header("location: http://localhost/practica-MVC-M8/");
    }

    function viewAddStudent()
    {
        require_once('view/addStudent.php');
    }

    function insertStudent()
    {

        $dateFormated = date("Y-m-d", strtotime($_GET['date']));
        $arrData = array(
            "nom" => $_GET['nom'],
            "matricula" => $_GET['matricula'],
            "data" => $dateFormated,
            "classe" => $_GET['class']
        );
        $data = $this->model->insertStudent($arrData);
        header("location: http://localhost/practica-MVC-M8/");
    }
    // assistencia 
    function viewAssistence()
    {
        $data = $this->model->showAssistence();
        require_once('view/assistence.php');
    }

    function addAssistence()
    {
        $data = $this->model->showStudent("1");
        require_once('view/addAssistence.php');
    }

    function insertAssistence()
    {

        $dateFormated = date("Y-m-d", strtotime($_GET['date']));
        $valueAssist = $_GET['assistence'];
        foreach ($valueAssist as $key => $value) {
           // echo $value[0];
            $arrData = array(
                "present" => $value,
                "absent" => 1- $value,
                "data" => $dateFormated,
                "estudiant_id" => $_GET['id']
            );
        }

        /*$arrData = array(
            "present" => $valueAssist[$key][$value],
            "absent" => $valueAssist[$key][$value],
            "data" => $dateFormated,
            "estudiant_id" => $_GET['id']
        );*/

        $data = $this->model->insertAssistence($arrData);
         header("location: http://localhost/practica-MVC-M8/?accio=viewAssistence");
    }
}
