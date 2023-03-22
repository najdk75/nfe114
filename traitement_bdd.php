<?php
$NOM = $_GET['nom'];

// connexion base de données 
$base = new PDO('mysql:host=localhost; dbname=id20205717_noms', 'id20205717_najd', '0$62q}/Fw])IOlry');

$base->exec("SET CHARACTER SET utf8");

$sql = "SELECT * FROM personne WHERE nom=$NOM";

$result = $base->query($sql);

if ($result->rowCount() == 0) { 
    echo $NOM ." n'est dans la base de données.";
 } else {
    echo $NOM . " est dans la base de données.";
 }

?>