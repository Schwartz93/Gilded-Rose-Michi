<?php

require_once "Item.php";

class Pass extends Item
{
    public function __construct($sellIn, $quality = 10) 
    {
        $this->sellIn = $sellIn;
        $this->quality = $quality;
        $this->itemName = "Pass";
    }

    public function letDaysPass() 
    {
        
        for ($i = $this->sellIn; $i >= 0; $i--) 
        { 
            if ($this->sellIn === 0) 
            {
                $this->quality = 0;
                echo "Pass needs to be sold today!<br><br>";
                echo "Todays quality of pass: " . $this->quality . "<br><br>";
                echo "<hr>";
                return $this;
            }
            elseif ($this->quality >= 47) 
            {
                $this->quality = 50;
                echo "<strong>Reached maximum quality of pass</strong><br><br>";
            }
            elseif ($this->quality < 50) 
            {
                if ($this->sellIn > 10) 
                {
                    $this->quality++;
                } 
                elseif ($this->sellIn <= 10 && $this->sellIn > 5) 
                {
                    $this->quality = $this->quality + 2;
                } 
                elseif ($this->sellIn <= 5) 
                {
                    $this->quality = $this->quality + 3;
                } 
            }          
            
    
            echo "Days until pass needs to be sold: $i" . "<br>";
            echo "Todays quality of pass: " . $this->quality . "<br><br>";
            $this->sellIn--;  
            
        }   echo "<hr>";
    } 
}    
