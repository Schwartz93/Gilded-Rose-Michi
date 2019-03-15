<?php

require_once "Item.php";

class Brie extends Item
{
    public function __construct($sellIn, $quality = 25)
    {
        $this->sellIn = $sellIn;
        $this->quality = $quality;
        $this->itemName = "Brie";
    }

    public function letDaysPass() 
    {
        if ($this->sellIn <= 0) 
        {
            return $this->quality;
        } else 
        {
            for ($i = $this->sellIn; $i >= 0 ; $i--) 
            { 
                if ($this->sellIn === 0) 
                {
                    echo "Brie needs to be sold today!<br><br>";
                    echo "<hr>";
                    return $this;
                }
                if ($this->quality < 50) 
                {
                    $this->quality++;
                } elseif ($this->quality === 50)  
                {
                    echo "<strong>Reached maximum quality of brie</strong><br><br>";
                    
                }
                echo "Days until brie needs to be sold: $i" . "<br>";
                echo "Todays quality of brie: " . $this->quality . "<br><br>";
                $this->sellIn--;               
            }
        }    
    }

}