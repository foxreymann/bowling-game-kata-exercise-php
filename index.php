<?php
    include 'CGame.php';

    $oGame = new CGame; 

    echo $oGame->fRoll('9');
    echo $oGame->fRoll('0');

    echo $oGame->fRoll('10');
?>
