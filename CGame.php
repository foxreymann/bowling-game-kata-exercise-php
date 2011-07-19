<?php

include 'CFrame.php';

/* Game manager */
class CGame {
    
    private $iScore = 0; 
    private $aFrames = array();
    private $iNumberOfFrames = 10;

    function fRoll($iPins) {
        if(!count($this->aFrames) || !$this->aFrames[count($this->aFrames)-1]->fNextRollDue()) {
            $this->aFrames[] = new CFrame();
        }
        // Add the roll points to the frame
        $this->aFrames[count($this->aFrames)-1]->fHandleRoll($iPins);
         
//var_dump($this->aFrames); 
        return $this->fCountScore();
    }

    function fGetScore() {
        return $this->fCountScore();
    } 

    private function fCountScore() {
        $this->iScore = 0;
        $iBonusDuePrevFrame = 0;
        $iBonusDueOneBeforePrevFrame = 0;
        foreach($this->aFrames as $iKey => $oFrame) {
            $this->iScore += $oFrame->fGetFrameScore();
            // add bonuses to the score
            if(1 == $iBonusDuePrevFrame) {
                $this->iScore += $oFrame->fGetRollScore(1);
            }            
            // move bonuses due data one frame forward
            $iBonusDueOneBeforePrevFrame = $iBonusDuePrevFrame;
            $iBonusDuePrevFrame = $oFrame->fGetBonusDue();            
        } 
        return $this->iScore;
    } 

} 

?>
