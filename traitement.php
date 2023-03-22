<?php
$WORD = $_GET['word'];
$INVERSE_WORD = strrev($WORD);
if (strcmp($WORD,$INVERSE_WORD) == 1){
    echo $WORD.' est un palindrome';
} else {
    echo $WORD." n'est pas un palindrome";
}
?>