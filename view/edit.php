<?php include_once("./layouts/header.php"); ?>
<form action="">
    <div>
        <label>Nom</label>
    </div>
    <div>
        <input type="text" name="nom" value="">
    </div>

    <div>
        <label>Codi matricula</label>
    </div>
    <div>
        <input type="text" name="codi-matricula" value="">
    </div>
    <div>
        <label>Data neixement</label>
    </div>
    <div>
        <input type="text" name="date-birth" value="">
    </div>
    <div>
        <label>Classe</label>
    </div>
    <div>
        <input type="text" name="class" value="">
    </div>

    <button id="btnSubmit">GUARDAR</button>
</form>
<?php include_once("./layouts/footer.php")  ?>