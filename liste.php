<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload images</title>
</head>

<body>
    <h3>Images de la BDD</h3>

    <?php
    require_once("connexion.php");
    $dbConn = dbConnect();

    $statement = $dbConn->prepare("SELECT img_nom, img_id FROM images ORDER BY img_nom");
    $statement->execute();
    $retour = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h3>Test affichage brut</h3>
    <?php
    foreach($retour as $img){
        echo "<a href='apercu.php?id=".$img['img_id']."'>".$img['img_nom']."</a><br>";
    }
    ?>
    <h3>Test affichage dans une page HTML</h3>
    <?php
    foreach($retour as $img){
        echo "<a href='afficherImage.php?id=".$img['img_id']."'>".$img['img_nom']."</a><br>";
    }
    ?>

    <p><a href="index.php">Accueil</a></p>
</body>

</html>