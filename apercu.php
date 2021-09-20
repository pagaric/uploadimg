<?php
if(isset($_GET['id'])) {

    require_once("helper.php");
    require_once("connexion.php");
    $dbConn = dbConnect();

    $id = intval($_GET['id']);

    $statement = $dbConn->prepare("SELECT img_id, img_type, img_blob FROM images
                                    WHERE img_id =" .$id);
    $statement->execute();
    $retour = $statement->fetch(PDO::FETCH_OBJ);
    
    if(!$retour){
        echo "Image inconnue";
    } else {
        header("Content-type:".$retour->img_type);
        echo $retour->img_blob;
    }

}