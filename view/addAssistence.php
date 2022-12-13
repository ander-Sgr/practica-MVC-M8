<?php include_once("layouts/header.php"); ?>
<form action="">
    <div>
        <input type="date" name="date" id="">
    </div>
    <table>
        <tr>
            <th>Data</th>
            <th>Present</th>
            <th>Absent</th>
        </tr>
        <?php foreach ($data as $key => $value) : ?>
            <?php foreach ($value as $v) : ?>
                <tr>
                    <td><?php echo $v['nom'] ?></td>
                    <td><input type="radio" name="assistence[<?php echo $v['id'] ?>]"  checked value="1"></td>
                    <td><input type="radio" name="assistence[<?php echo $v['id'] ?>]"  value="0"></td>
                    <td><input type="hidden" name="id" value="<?php echo $v['id'] ?>"></td>
                </tr>

            <?php endforeach ?>
        <?php endforeach ?>

    </table>
    <input type="submit" name="btn" value="Guardar">
    <input type="hidden" name="accio" value="insertAssistence">
</form>

<?php include_once("layouts/header.php"); ?>