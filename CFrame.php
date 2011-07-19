<?php

/* Points from one frame */
class CFrame {

    protected $aRolls = array();
    protected $iBonusDue = 0;  

    const NUMBER_OF_PINS = 10;
    const NUMBER_OF_ROLLS = 2;
    const STRIKE = 1;
    const SPARE = 2; 
    const STRIKE_BONUS = 2;
    const SPARE_BONUS = 1;

    function fGetFrameScore() {
       return array_sum($this->aRolls);
    }

    function fGetRollScore($iRollNumber) {
       if(isset($this->aRolls[$iRollNumber])) {
           return $this->aRolls[$iRollNumber];
        } else {
            return false;
        }
    }

    function fGetBonusDue() {
       return $this->iBonusDue;
    }

    function fNextRollDue() {
        if(count($this->aRolls) < self::NUMBER_OF_ROLLS){
            return true;
        }
        return false;
    }     

    function fHandleRoll($iPins) {
        if($this->fNextRollDue()) {
            $this->aRolls[] = $iPins;    
            // if bonus due
            if(array_sum($this->aRolls) == self::NUMBER_OF_PINS) {
                // give bonus
                if(self::STRIKE == count($this->aRolls)) {
                    $this->iBonusDue = self::STRIKE_BONUS;    
                } elseif (self::SPARE == count($this->aRolls)) {
                    $this->iBonusDue = self::SPARE_BONUS;    
                }
            }
        }
    }
} 

?>
