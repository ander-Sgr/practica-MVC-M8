<?php require "layouts/header.php" ?>

<form action="">
    <?php foreach ($data as $values) : ?>
        <?php foreach ($values as $value) : ?>
            <div><label>Nom</label></div>
            <div> <input type="text" name="nom" value="<?php echo $value['nom'] ?>"></div>
            <div> <label>Codi Matricula</label></div>
            <div><input type="text" name="matricula" value="<?php echo $value['matricula'] ?>"><br></div>
            <div>
                <label>Data neixement</label>
            </div>
            <div>
                <input type="text" name="data" value="<?php echo $value['data'] ?>">
            </div>
            <div>
                <label>Classe</label>
            </div>
            <div>
                <input type="text" name="classe" value="<?php echo $value['classe'] ?>">
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>" />
            </div>
        
            <input type="submit" name="btn" id="btnSubmit" value="GUARDAR">
        <?php endforeach ?>
    <?php endforeach ?>
    <input type="hidden" name="accio" value="updateStudent">
</form>


<?php require "layouts/footer.php" ?>