<?php
function transfert()
{
    $ret = false;
    $img_blob = '';
    $img_taille = 0;
    $img_type = '';
    $img_nom = '';
    $taille_max = 250000;
    $ret = is_uploaded_file($_FILES['fic']['tmp_name']);
    
    if (!$ret) {
        echo "Problème de transfert";
        return false;
    } else {
        // Le fichier a bien été reçu
        $img_taille = $_FILES['fic']['size'];
        if ($img_taille > $taille_max) {
            echo "Trop gros !";
            return false;
        }
        $img_type = $_FILES['fic']['type'];
        $img_nom = $_FILES['fic']['name'];

        require_once("connexion.php");
        $img_blob = file_get_contents($_FILES['fic']['tmp_name']);
        $dbConn = dbConnect();
        $img_desc = 'Description';

        $sql = "INSERT INTO images (img_id, img_nom, img_taille, img_type, img_desc, img_blob)
                VALUES (NULL, '".$img_nom."', '".$img_taille."', '".$img_type."',' ".$img_desc."', '". addslashes($img_blob)."')";
        
        $dbConn->exec($sql);


    }
}
