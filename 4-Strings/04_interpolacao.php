<?php

// A interpolação permite adcinar elementos dentro de uma String, interpolação so funcionará entre aspas duplas.

$name = 'Thailane';
$lastName = "Lopes";

$fullName = "$name $lastName";

echo "$fullName \n";

$fullName = "{name} {$lastName}"; // as {} servem para identificar o início e o fim de uma interpolação.

echo $fullName . "\n";