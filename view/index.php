<?php include_once("layouts/header.php");
//  require_once("../controller/ControllerStudent.php");
?>

<div class="agregar">
    <a href="index.php?accio=viewAddStudent" id="botoAfegir">
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
    <?php
    foreach ($data as $key => $value) {
        $timestamp = strtotime($data[$key]['data']);
        $dataAssitencia = date("d-m-Y", $timestamp);
        echo "<tr>";
        echo "<td>" . $value['nom'] . "</td>";
        echo "<td>" . $value['matricula'] . "</td>";
        echo "<td>" . $dataAssitencia . "</td>";
        echo "<td>" . $value['classe'] . "</td>";
        echo "<td><a href='index.php?accio=edit&user=" . $value['id'] . "'><img src='./resources/images/icon-edit.png' alt='edit'></a>
        <a href=index.php?><img src='./resources/images/icon-delete.png' alt='edit'></a>
        </td>";
        echo "</tr>";
    }


    ?>
</table>

<?php
include_once("layouts/footer.php")
?>