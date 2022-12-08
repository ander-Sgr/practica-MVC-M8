<?php include_once("layouts/header.php");
//  require_once("../controller/ControllerStudent.php");
?>

<div class="agregar">
    <a href="" id="botoAfegir">
        <img src="./resources/images/icon-add.png" alt="">
        Agregar Estudiant
    </a>
</div>
<table>
    <tr>
        <th>Nom Estudiant</th>
        <th>Codi Matricula</th>
        <th>Data de neixement</th>
        <th>Classe</th>
        <th>Acció</th>
    </tr>
    <?php foreach ($data as $key => $value) : ?>
    <?php $timestamp = strtotime($data[$key]['data']);
        $dataAssitencia = date("d-m-Y", $timestamp);
    ?>
    <tr>
        <td><?php echo $value['nom'] ?></td>
        <td><?php echo $value['matricula'] ?></td>
        <td><?php echo $dataAssitencia?></td>
        <td><?php echo $value['classe'] ?> </td>
        <td><a href="./view/edit.php"><img src="./resources/images/icon-edit.png" alt="edit"></a> <a href=""><img src="./resources/images/icon-delete.png" alt="delete"></a></td>
    </tr>
    <?php endforeach ?>
</table>

<?php
include_once("layouts/footer.php")
?>