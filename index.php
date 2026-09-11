<?php
 
class Box {
 private $w;
private $n;
private $l;

public function __construct() {
    var_dump('Box was created!');
}

public function volume(){
    return $this-> w* $this->h * $this->l;

    
}
}

$box1 = new Box(1,2,3,4);
$box2 = new Box(4,5,6,);
var_dump($box1,$box2);
$box3 = clone $box2;
echo $box1; 