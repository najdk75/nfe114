<html>
<body>
<h1>Insertion du film</h1>
<?php

$TITRE= $_GET['titre'];
$GENRE = $_GET['genre'];
$ANNEE = $_GET['annee'];

echo $TITRE." ".$GENRE." ".$ANNEE; 

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_movies', 'id20205717_najd', 'nf(@QdchWm2Qb/()');
$base->exec("SET CHARACTER SET utf8");
$sql = 'INSERT INTO movie VALUES(NULL,"'.$TITRE.'","'.$GENRE.'",'.$ANNEE.')';
//2° - Préparation de requette et execution
$retour = $base->query($sql);

?>
</body>
</html>