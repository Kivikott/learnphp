<?php
 
function hello():void {
var_dump('hello');
}
 
hello();
 
function helloName($name) {
var_dump("hello, $name!");
}
 
helloName('kaspar');
helloName('martin');
 
function helloNameAndAge($name, $age) {
    var_dump("hello, $name ! You are $age years old");
}
helloNameAndAge('kaspar', 32);

 var_dump($test);

 $numbers = [1,1,2,3,4,6];

 $squares =(function($n) {
    return $n * $n;

 }, $numbers);
 $squares = array_map(fn($n) => $n * $n, $numbers);
 var_dump($squares);
  $numbers = [1, 2, 3, 4];
$squares = array_map(function ($n) {
return $n * $n;
}, $numbers);
$squares = array_map(fn ($n) => $n * $n, $numbers);
var_dump($squares);
function cube($a) {
    if($a < 0){
        return 'no negative!';
    }
    return $a * $a * $a;
    var_dump('AAAAA');
    }
    var_dump(cube(4));
 
    $anwser = cube(5);
    $text = "cube of 5 is $ansWer!";
    echo $text;