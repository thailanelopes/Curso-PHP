<?php
//spaceship(Significa nave espacial) é um operador de comparação, porém ele não gera necessáriamente um resultado booleano, ele gera um resultado inteiro.

$a = 0 <=> 1; // igual a -1
$b = 1 <=> 1; // igual a 0
$c = 2 <=> 1; // igual a 1
/*ele funciona da seguinte maneira: 
Se o primeiro valor for menor que o segundo valor, o resultado será um inteiro negativo.
Se o primeiro valor for igual ao segundo, oresultado será 0.
Se o  primeiro valor for maior que o segundo valor o resultado será 1.
*/
var_dump($a);
var_dump($b);
var_dump($c);