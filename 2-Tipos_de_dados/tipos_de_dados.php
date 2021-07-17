<?php

//int
$v1 = 10;

//float
$v2 = 10.5;

//boolean
$v3 = true;
$v4 = false;

//string
$v5 = 'String';
$v6 = "string\n";

//void- não retorna nada.

//mixed - O mixed, não é escrito por código, ele apenas existe de uma forma abstrata.



//array
$v7 = [];
$v8 = array();

//object

$v9 = new class{

};
$v10 = (object) [];
$v11 = new stdClass();

//gettype
$type = gettype(10.5); //pode ser utilizado para identificar qual o tipo do valor passado. 