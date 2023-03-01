<html>
<body>
<h1>Recherche de films</h1>
<?php


$ANNEE = $_GET['annee'];



//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_database_movies', 'id20205717_najd', 'QEyHS[))ia1DAg1X');
$base->exec("SET CHARACTER SET utf8");
//2° - Préparation de requette et execution
$retour = $base->query('SELECT * FROM movies WHERE annee='.$ANNEE.';');

// Affichage des résultats
foreach ($resultat as $retour) {
    echo $resultat['titre'] . "<br>";
}


?>

</body>
</html>