<?php include_once("layouts/header.php"); ?>

<form action="">
    <div>
        <input type="date" name="date" id="" value="<?php echo $_REQUEST['dateAssis'] ?>">
    </div>
    <table>
        <tr>
            <th>Estudiant</th>
            <th>Present</th>
            <th>Absent</th>
        </tr>
        <?php foreach ($data as $key => $value) : ?>
            <?php foreach ($value as $v) : ?>
                <tr>
                    <td><?php echo $v['nomEstudiant'] ?></td>
                    <?php if ($v['present'] == 1) : ?>
                        <td><input type="radio" name="assistence[<?php echo $v['idEstudiant'] ?>]" checked value="1"></td>
                    <?php else : ?>
                        <td><input type="radio" name="assistence[<?php echo $v['idEstudiant'] ?>]" value="1"></td>
                    <?php endif ?>
                    <?php if ($v['absent'] == 1) : ?>
                        <td><input type="radio" name="assistence[<?php echo $v['idEstudiant'] ?>]" checked value="0"></td>
                    <?php else : ?>
                        <td><input type="radio" name="assistence[<?php echo $v['idEstudiant'] ?>]" value="0"></td>
                    <?php endif ?>
                    <td><input type="hidden" name="id" value="<?php echo $v['idEstudiant'] ?>"></td>
                </tr>

            <?php endforeach ?>
        <?php endforeach ?>

    </table>
    <input type="submit" name="btn" id="btnSubmit" value="Guardar">
    <input type="hidden" name="accio" value="updateAssistence">
</form>

<?php include_once("layouts/footer.php"); ?>