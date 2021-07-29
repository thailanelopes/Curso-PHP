<?php
$a = 1 == 1; // se o número 1 for == ao número 1, o valor será true, se não, será false.
$b = 1 == 2;

var_dump($a);
var_dump($b);

$c = 1 == '1'; //true
$d = 'a' == 'A'; //false

var_dump($c);
var_dump($d);