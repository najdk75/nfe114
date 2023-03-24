<?php
$NAME = $_GET['nom'];

// connexion baseee de données 
$base = new PDO('mysql:host=localhost; dbname=id20205717_noms', 'id20205717_najd', '0$62q}/Fw])IOlry');

$base->exec("SET CHARACTER SET utf8");

$sql = "INSERT INTO personne VALUES(NULL,'$NAME')";

$result = $base->query($sql);

if ($result == false) { 
    echo '<span style="color:red">'.$NAME.' </span>n\'a pas pu être ajouté dans la BDD.'; 
} 
else {
    echo '<span style="color:blue">'.$NAME.' </span>n\'a été ajouté dans la BDD.';
}
    

?>