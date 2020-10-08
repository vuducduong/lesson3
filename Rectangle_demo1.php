<?php
class Rectangle{
    public $width;
    public $height;

    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    public function getArea(){
        return $this->height*$this->width;
    }
    public function getPremester(){
        return ($this->width + $this->height)*2;
    }
    public function getDishplay(){
        return "Your Rectangle{". "width=". $this->width . ", height=" .$this->height ."}";
    }
}