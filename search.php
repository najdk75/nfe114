<html>
<body>
<h1>Recherche de film</h1>
<?php

$ANNEE = $_GET['annee'];


//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_movies', 'id20205717_najd', 'nf(@QdchWm2Qb/()');
$base->exec("SET CHARACTER SET utf8");
$retour = $base->query('SELECT * FROM movie WHERE annee='.$ANNEE.';');//2° - Préparation de requette et execution

while ($data = $retour->fetch()){
    echo $data['id']." ".$data['titre']." ".$data['genre']." ".$data['annee']."</br>";
    }
    

?>
</body>
</html>