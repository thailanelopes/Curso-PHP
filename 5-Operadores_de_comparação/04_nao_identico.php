<?php
// !== É o mesmo princípio do idêntico,
$a = 1 !== 1; //false 
$b = 1 !== 2; //true

var_dump($a);
var_dump($b);

$c = 1 !== '1'; //true
$d = 'a' !== 'A'; //true

var_dump($c);
var_dump($d);