<?php
include ("Rectangle_demo1.php");
$width =10;
$height =20;
$rectangle = new Rectangle($width,$height);
echo $rectangle->width."<br>";
echo $rectangle->height."<br>";

$rectangle->width = 20;
$rectangle->height = 30;
echo $rectangle->width."<br>";
echo $rectangle->height."<br>";
echo $rectangle->getArea()."<br>";
echo $rectangle->getPremester()."<br>";
echo $rectangle->getDishplay()."<br>";
