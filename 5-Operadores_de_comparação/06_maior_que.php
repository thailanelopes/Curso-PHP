<?php
$a = 1 > 1; //false - 1 não é maior que 1.
$b = 1 > 2; //true - 2  é maior que 1.

var_dump($a);
var_dump($b);

$c = 1 > '2'; // true - 2  é maior que 1.
$d = 'a' > 'A'; // true- A é maior que a.

var_dump($c);
var_dump($d);