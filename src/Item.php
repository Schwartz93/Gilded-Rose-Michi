<?php

class Item
{
    protected $quality;
    protected $sellIn;
    protected $itemName;

    public function displayItem() 
    {
        echo "<strong> Item </strong>: " . $this->itemName . "<br>";
        echo '<strong> Quality at first day: </strong> ' . $this->quality . "<br>";
        echo '<strong> Sell by: </strong> ' . $this->sellIn . ' days.' . '<br><br>';
    }
}