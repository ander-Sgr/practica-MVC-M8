<?php include_once("layouts/header.php");
?>

<div class="agregar">
    <a href="index.php?accio=addAssistence" id="botoAfegir">
        <img src="./resources/images/icon-add.png" alt="">
        Agregar Asistencia
    </a>
</div>
<table>
    <tr>
        <th>Data</th>
        <th>Present</th>
        <th>Absent</th>
        <th>Acció</th>
    </tr>
    <?php
        foreach ($data as $key => $value) {
            $timestamp = strtotime($data[$key]['data']);
            $dataAssitencia = date("d-m-Y", $timestamp);
            echo "<tr>";
            echo "<td>" . $dataAssitencia . "</td>";
            echo "<td>" . $value['num_present'] . "</td>";
            echo "<td>" . $value['num_absent'] . "</td>";
            echo "<td><a href='index.php?accio=editAssistence&dateAssis=" . $dataAssitencia . "'><img src='./resources/images/icon-edit.png' alt='edit'></a>
            <a href=index.php?><img src='./resources/images/icon-delete.png' alt='edit'></a>
            </td>";
            echo "</tr>";
        }   


    ?>
</table>

<?php
include_once("layouts/footer.php")
?>