<?php require "layouts/header.php" ?>

<form method="POST" action="index.php">
    <div>
        <label>Nom</label>
    </div>
    <div>
        <input type="text" name="nom" id="" require>
    </div>
    <div>
        <label>Codi Matricula</label>
    </div>
    <div>
        <input type="text" name="matricula" require>
    </div>
    <div>
        <label>Data neixement</label>
    </div>
    <div>
        <input type="date" name="date" value="2000-01-01" />
    </div>
    <div>
        <label>Classe</label>
    </div>
    <div>
        <input type="text" name="class" require>
    </div>
    <input type="submit" name="btn" value="Guardar">
    <input type="hidden" name="action" value="insertStudent">
</form>

<?php require "layouts/footer.php" ?>