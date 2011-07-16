<?php

/* Points from one frame */
class CFrame {

    private $m_aPoints = array();
    private $m_iBonusDue = 0;  

    private $m_iNumberOfPins = 0;

    function __construct($m_iNumberOfPins) {
        $this->m_iNumberOfPins = $m_iNumberOfPins;
    }

    function fGetScore() {
       return 0;
    }

    function fNextRollDue() {
       return false;
    }     

    function fHandleRoll($iPins) {
        $this->m_aPoints[];    
    }
} 

?>
