<html>
<body>
<h1>Recherche de films</h1>
<?php


$ANNEE = $_GET['annee'];



//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_database_movies', 'id20205717_najd', 'M<oTL%B!jA2X\FaT');
$base->exec("SET CHARACTER SET utf8");
//2° - Préparation de requette et execution
$retour = $base->query('SELECT * FROM movies WHERE annee='.$ANNEE);

// Affichage des résultats
while ($data = $retour->fetch()){
    echo $data['id']." ".$data['titre']." ".$data['genre']." ".$data['annee']."</br>";
    }


?>

</body>
</html>