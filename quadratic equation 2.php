<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;

    public function __construct($a,$b,$c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function getA(){
       return $this->a;
  }
    public function getB(){
       return $this->b;
   }
    public function getC(){
        return $this->c;
   }
    public function getDiscriminant(){
        return ($this->b**2) - (4* $this->a *$this->c);
    }
    public function getRoot1(){
        return (-($this->b)+sqrt($this->getDiscriminant()))/($this->a*2);
    }
    public function getRoot2(){
        return (-($this->b)-sqrt($this->getDiscriminant()))/($this->a*2);
    }
    public function getDisplay(){
        return "Phương trình vô nghiệm";
 }

}
