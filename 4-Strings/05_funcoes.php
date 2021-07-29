<?php

echo strtoupper('Thailane') . "\n"; // strtoupper- deixa tudo na string maiúsculo.

echo strtolower('Thailane') . "\n"; //strtolower- deixa tudo na string minúsculo.

echo trim(' Thailane ') . "\n"; //trim- remove os espaços antes e depois da String.

echo ltrim(' Thailane ') . "\n"; //ltrim- remove somente o espaço anterior da string.

echo rtrim(' Thailane ') . "\n"; //rtrim- remove os espaços da direita.

echo 'R$' . number_format(1000000, 2, ',', '.') . "\n"; //number_format- Vai pegar um número, adicionar as casas decimais, ex: 2,  vai separar as casas decimais por vírgulas, e a casa do milhar vai ser separada por ponto.
                                                        //Tambem irá concatenar o R$ antes do texto e com o \n depois.

echo str_replace('p', '', 'Oplá, cpompo epsptá.') . "\n"; //str_replace- onde pode-se digitar oque quer procurar, pelo que quer substituir.
                                                        // no exemplo a letra p está sendo substituída por nada ''.

echo strlen('Thailane Lopes Dutra') . "\n"; //strlen- irá pegar a quantidade de caracteres dentro de uma String e retornará um número inteiro.
