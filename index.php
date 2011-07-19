<?php
    include 'CGame.php';

    $oGame = new CGame; 

    echo $oGame->fRoll('9').'<br />'; // score should be 9
    echo $oGame->fRoll('1').'<br />'; // score should be 10

    echo $oGame->fRoll('9').'<br />'; // score should be 28
    echo $oGame->fRoll('1').'<br />'; // score should be 29

    echo $oGame->fRoll('8').'<br />'; // score should be 45 
    echo $oGame->fRoll('2').'<br />'; // score should be 47 

?>
