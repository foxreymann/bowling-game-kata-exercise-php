<?php

include 'CFrame.php';

/* Game manager */
class CGame {
    
    private $m_iScore = 0; 
    private $m_aFrames = array();
    private $m_iNumberOfFrames = 10;
    private $m_iNumberOfPins = 10;

    function fRoll($iPins) {
        if(!count($this->m_aFrames) || !$this->m_aFrames[count($this->m_aFrames)-1]->fNextRollDue()) {
//echo $this->m_aFrames[count($this->m_aFrames)-1]->fNextRollDue();
echo 'new frame'; 
            $this->m_aFrames[] = new CFrame($this->m_iNumberOfPins);
            
        }
var_dump($this->m_aFrames);
echo "<br />";
        // Add the roll points to the frame
        $this->m_aFrames[count($this->m_aFrames)-1]->fHandleRoll($iPins);
         
 
        return true;
    } 

} 

?>
