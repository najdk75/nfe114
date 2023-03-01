<html>
<body>
<h1>Recherche de films</h1>
<?php


$ANNEE = $_GET['annee'];



//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_database_movies', 'id20205717_najd', 'QEyHS[))ia1DAg1X');
$base->exec("SET CHARACTER SET utf8");
$sql = "SELECT title FROM movies WHERE annee='" . $ANNEE . "'";
//2° - Préparation de requette et execution
$retour = $base->query($sql);

$resultats = $base->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats
foreach ($resultats as $resultat) {
    echo $resultat['title'] . "<br>";
}


?>

</body>
</html>