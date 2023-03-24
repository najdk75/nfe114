<?php
$NAME = $_GET['nom'];
$MESSAGE_RETOUR = '';
$BONNES_CONDITIONS = false;
if (strlen($NAME) < 2){
    $MESSAGE_RETOUR = '<span style="color:red"<strong>'.$NAME .'</strong> : Ce pseudo est trop court.</span>';
} else if (strlen($NAME) > 10) {
    $MESSAGE_RETOUR = '<span style="color:red"<strong>'.$NAME .'</strong> : Ce pseudo est long court.</span>';
} else {
    $BONNES_CONDITIONS = true;
}
$REPONSE = array(
    'est_valide' => $BONNES_CONDITIONS,
    'message' => $MESSAGE_RETOUR,
);
echo json_encode($REPONSE);
?>
