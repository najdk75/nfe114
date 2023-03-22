<?php
$NAME = $_GET['nom'];

if (strlen($NAME) >= 2 && strlen($NAME) <= 10){

    // connexion baseee de données 
    $base = new PDO('mysql:host=localhost; dbname=id20205717_noms', 'id20205717_najd', '0$62q}/Fw])IOlry');

    $base->exec("SET CHARACTER SET utf8");

    $sql = "SELECT * FROM personne WHERE nom='$NAME'";

    $result = $base->query($sql);

    if ($result->rowCount() == 0) { 
        echo '<span style="color:red">'.$NAME.' </span>n\'est pas dans la base de données.'; 
    } else {
        echo '<span style="color:blue">'.$NAME.' </span>n\'est pas dans la base de données.';
    }
    
} else {
    echo "Insérez un nom d'une longueur comprise entre 2 et 10 caractères.";
}
?>