<?php
$WORD = $_GET['word'];
$INVERSE_WORD = strrev($WORD);

if ($WORD == $INVERSE_WORD){
    echo $WORD.' est un palindrome';
} else {
    echo $WORD." n'est pas un palindrome";
}
?>