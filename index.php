<?php

require "src/Item.php";

require "src/Brie.php";
require "src/Sulfuras.php";
require "src/Pass.php";

$brie = new Brie(3);
$brie->displayItem();
$brie->letDaysPass();

$sulfuras = new Sulfuras(2);
$sulfuras->displayItem();
$sulfuras->letDaysPass();

$pass = new Pass(23);
$pass->displayItem();
$pass->letDaysPass();

$thisisatest;