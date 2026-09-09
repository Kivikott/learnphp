<?php
 
class Box {
    public $width;
    public $height;
    public $lenght;
    public $isOpen = false;
    public $hasBeenOpend = false;
    
    public function open () {
        $this->isOpen = true;
        $this->hasBeenOpend =true;
    }

     public function close () {
        $this->isOpen = true;
        }

public function volume() {
    return $this->height * $this->length * $this->width;
}

}
$num1 = 1;
$num2 = $num1;
$num1 = 2;
var_dump($num1, $num2);



$box1 = new Box();
$box1->width = 1;
$box2 = $box1;
$box2->width = 2;
var_dump($box1, $box2);

class MetalBox extends Box{
   public $weight;
public function mass(){
    return $this->volume() * $this->weight;
}
}
$metal1 = new MetalBox ();
var_dump($metal1);

