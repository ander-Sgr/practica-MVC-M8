<?php require "layouts/header.php" ?>

<form action="">
    <?php foreach ($data as $values) : ?>
        <?php foreach ($values as $value) : ?>
            <label>Nom</label>
            <input type="text" name="nom" value="<?php echo $value['nom'] ?>"><br>
            <label>Codi Matricula</label>
            <input type="text" name="matricula" value="<?php echo $value['matricula'] ?>"><br>
            <label>Data neixement</label>
            <input type="text" name="data" value="<?php echo $value['data'] ?>"><br>
            <label>Classe</label>
            <input type="text" name="classe" value="<?php echo $value['classe'] ?>"><br>
            <input type="hidden" name="id" value="<?php echo $value['id'] ?>" />
            <input type="submit" name="btn" id="" value="GUARDAR">
        <?php endforeach ?>
    <?php endforeach ?>
    <input type="hidden" name="accio" value="guardar">
</form>


<?php require "layouts/footer.php" ?>