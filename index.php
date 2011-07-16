<?php
    include 'CGame.php';

    $oGame = new CGame; 

    echo $oGame->fRoll('9').'<br />';
    echo $oGame->fRoll('0').'<br />';

    echo $oGame->fRoll('10').'<br />';
?>
