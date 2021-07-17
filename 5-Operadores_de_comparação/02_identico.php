<?php
$a = 1 === 1; // se o número 1 for === (idêntico) ao número 1, o valor será true, se não, será false. O idêntico também diferencia os dados.
$b = 1 === 2; //false- pois embora eles sejam do mesmo tipo, os valores são diferêntes

var_dump($a);
var_dump($b);

$c = 1 == '1'; //false- pois embora eles sejam do mesmo tipo, os valores são diferêntes, 1 é inteiro e '1' é uma string.
$d = 'a' == 'A'; //false

var_dump($c);
var_dump($d);