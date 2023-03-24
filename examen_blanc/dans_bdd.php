<?php
$NAME = $_GET['nom'];

$MESSAGE_RETOUR = '';
$PEUT_INSERER = true;
    // connexion baseee de données 
    
$BASE = new PDO('mysql:host=localhost; dbname=id20205717_noms', 'id20205717_najd', '0$62q}/Fw])IOlry');
$BASE->exec("SET CHARACTER SET utf8");

$SQL = "SELECT * FROM personne WHERE nom='$NAME'";

$RESULT = $BASE->query($SQL);

    if ($RESULT->rowCount() == 0) {     
        $MESSAGE_RETOUR = '<span style="color:red"><strong>'.$NAME.'</strong> : Ce pseudo est libre. </span>'; 
        $PEUT_INSERER = true;
    } else {
        $MESSAGE_RETOUR = '<span style="color:green"><strong>'.$NAME.'</strong>: Ce pseudo est déjà pris.</span>';

    }

$REPONSE = array(
    'peut_inserer' => $PEUT_INSERER,
    'message' => $MESSAGE_RETOUR,
);
    
echo json_encode($REPONSE);

?>