<?php

/* Handles score for the last frame */
class CLastFrame extends CFrame {

    const NUMBER_OF_ROLLS = 3;

    function fNextRollDue() {
        if(count($this->aRolls) < self::NUMBER_OF_ROLLS) {
            // 3rd roll check
            if(count($this->aRolls) == 3 && array_sum($this->aRolls) < self::NUMBER_OF_PINS) {
                return false ;
            }
            return true; 
        }
        return false;
    }     
}
?>
