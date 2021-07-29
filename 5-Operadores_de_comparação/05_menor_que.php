<?php
$a = 1 < 1; //false - 1 não é menor que 1.
$b = 1 < 2; //true - 1 é menor que 2.

var_dump($a);
var_dump($b);
// o < não verifica tipo de dados, apenas o valor.
$c = 1 < '2'; // true - 1 é menor que 2.
$d = 'a' < 'A'; // false - como os maiúsculos vem antes dos minúsculos o resultado deu false a é menor que A, se ocorrece a inversão dos valores daria true onde A < a.

var_dump($c);
var_dump($d);