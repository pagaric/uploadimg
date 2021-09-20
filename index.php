<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload images</title>
</head>

<body>

    <?php
    require_once("transfert.php");
    if (isset($_FILES['fic'])) {
        transfert();
    }
    ?>

    <h3>Envoie d'une image</h3>

    <form enctype="multipart/form-data" action="#" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
        <input type="file" name="fic" size=50 />
        <br>
        <br>
        <input type="submit" value="Envoyer" />
    </form>

    <p><a href="liste.php">Liste des images</a></p>
    <p><a href="testAffichage.php">Test affichage HTML</a></p>
</body>

</html>