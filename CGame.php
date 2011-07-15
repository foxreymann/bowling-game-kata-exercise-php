<?php

include 'CFrame.php';

/* Game manager */
class CGame {
    
    private $m_iScore = 0; 
    private $m_aFrames = array();
    private $m_iNumberOfFrames = 10;

    function fRoll() {
        $m_aFrames[0] = new CFrame; 
        return true;
    } 

} 

?>
