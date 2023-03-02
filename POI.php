<?php


$LONGITUDE = $_GET['longitude'];
$LATITUDE = $_GET['latitude'];
//C'est le POI de l'utilisateur
echo "lat\tlon\ttitle\tdescription\ticon\ticonSize\ticonOffset\n";
echo "$LATITUDE\t$LONGITUDE\tMoi\tMa Position\tperson.png\t24,24\t0,0\n";


//1° - Connexion à la BDD...
$base = new PDO('mysql:host=localhost; dbname=id20205717_open_street_map', 'id20205717_najd2', 'mhV@4(qdgb()k+5G');
$base->exec("SET CHARACTER SET utf8");

//2° - Préparation de requette et execution
$retour = $base->query("SELECT *, get_distance_metres('$LATITUDE', '$LONGITUDE', equi_lat, equi_long) 
AS proximite 
FROM equipement 
HAVING proximite < 1000 ORDER BY proximite ASC
LIMIT 25;
");

//Boucle For
while ($data = $retour->fetch()){
    echo $data['equi_lat']."\t".$data['equi_long']."\t$data[equi_libelle]\t".(isset($data['equi_bat']) ? $data['equi_bat'] : ' ')."\tpoint_of_interest.png\t24,24\t0,-24\n";

}

?>
