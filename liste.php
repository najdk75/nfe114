<html>
<body>
<h1>Liste des filmss</h1>


<?php
//Lister le contenu de la table movies

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205717_movies', 'id20205717_najd', 'nf(@QdchWm2Qb/()');

$base->exec("SET CHARACTER SET utf8");

//2° - Préparation de requette et execution
$retour = $base->query('SELECT * FROM movie;');

//3° - Lecture du resultat de la requette
while ($data = $retour->fetch()){
echo $data['id']." ".$data['titre']." ".$data['genre']." ".$data['annee']."</br>";
}

?>

</body>
</html>