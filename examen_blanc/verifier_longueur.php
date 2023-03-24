<?php
$NAME = $_GET['nom'];
$MESSAGE_RETOUR = '';
$BONNES_CONDITIONS = false;
if (strlen($NAME) < 2){
    $MESSAGE_RETOUR = '<strong>'.$NAME .'</strong> : Ce pseudo est trop court.';
} else if (strlen($NAME) > 10) {
    $MESSAGE_RETOUR = '<strong>'.$NAME .'</strong> : Ce pseudo est trop long.';
} else {
    $BONNES_CONDITIONS = true;
}
$reponse = array(
    'est_valide' => $BONNES_CONDITIONS,
    'message' => $MESSAGE_RETOUR,
);
echo json_encode($reponse);
?>
