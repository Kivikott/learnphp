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

$box1 = new Box();
$box1->width = 10;
$box1->lenght = 10;
$box1->height = 30;
$box1->open();
var_dump($box1); 
var_dump($box1->volume());

