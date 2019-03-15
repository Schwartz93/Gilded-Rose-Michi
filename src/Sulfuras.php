<?php
require_once "Item.php";

class Sulfuras extends Item
    {
        public function __construct($sellIn, $quality = 30) 
        {
            $this->sellIn = $sellIn;
            $this->quality = $quality;
            $this->itemName = "Sulfuras";
        }

        public function letDaysPass() 
        {
            if ($this->sellIn < 0) 
        {
            return $this->quality;
        } elseif ($this->sellIn === 0) 
        {
            echo "No worries, this item is legendary. It does not need to be sold! <br><br>";
            return $this;
        }
        
            echo "<strong>Reached maximum quality of sulfuras</strong><br><br>";
            
        
        echo "Days until sulfuras needs to be sold: Never" . "<br>";
        echo "Todays (and final) quality of sulfuras: " . $this->quality . "<br><br>";
        echo "<hr>";
        }                 
    }
    
        
    