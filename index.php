<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <?php
    include_once("controller/ControllerStudent.php");
    if (isset($_REQUEST['accio'])) {
        $method = $_REQUEST['accio'];
        if (method_exists($controller, $method)) {
            $controller->{$method}();

        }
    } else {
        $controller->showStudents();
    }
    ?>
</body>

</html>
