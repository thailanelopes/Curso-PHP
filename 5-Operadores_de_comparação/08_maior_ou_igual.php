<?php
$a = 1 >= 1; //true - 1 é maior ou igual a 1.
$b = 1 >= 2; //true - 2 é maior ou igual a 1.

var_dump($a);
var_dump($b);

$c = 1 >= '2'; // true - 2 é maior ou igual a que 1.
$d = 'a' >= 'A'; // true A é maior que o a.

var_dump($c);
var_dump($d);