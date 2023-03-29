<?php


$NAME = $_POST['name'];
$EMAIL = $_POST['replyto'];
$MESSAGE = $_POST['message'];


// conneexionn baseee de données 
$base = new PDO('mysql:host=localhost; dbname=id20205717_contact', 'id20205717_najd', '{ibSqaub-2wFdrm{');

$base->exec("SET CHARACTER SET utf8");

$sql = "INSERT INTO personne VALUES(NULL,'$NAME','$EMAIL','$MESSAGE')";

$result = $base->query($sql);
    

?>