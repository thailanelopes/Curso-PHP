<?php
// != Fará a verificação se os valores são diferentes.
$a = 1 != 1; //false 
$b = 1 != 2; //true

var_dump($a);
var_dump($b);

$c = 1 != '1'; //false
$d = 'a' != 'A'; //true

var_dump($c);
var_dump($d);