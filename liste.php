<html>
<body>
<h1>Liste des films</h1>


<?php
//Lister le contenu de la table movies

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_database_movies', 'id20205717_najd', 'QEyHS[))ia1DAg1X
');
$base->exec("SET CHARACTER SET utf8");

//2° - Préparation de requette et execution
$retour = $base->query('SELECT * FROM movies;');

//3° - Lecture du resultat de la requette
while ($data = $retour->fetch()){
echo $data['id']." ".$data['titre']." ".$data['genre']." ".$data['annee']."</br>";
}

?>

</body>
</html>