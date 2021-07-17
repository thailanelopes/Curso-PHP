<?php
$a = 1 <= 1; //true - 1 é menor ou igual a 1.
$b = 1 <= 2; //true - 1 é menor ou igual a 2.

var_dump($a);
var_dump($b);

$c = 1 <= '2'; // true - 1 é menor ou igual a que 2.
$d = 'a' <= 'A'; // false.

var_dump($c);
var_dump($d);