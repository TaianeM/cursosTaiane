<?php

/* Case Sensitivity

Significa sensibilidade a casas maiusculas e minusculas;

Para instruções php não temos essa diferença, ou seja: echo = ECHO;

Porém para variáveis são CASE SENSITIVE;

Ou seja, $nome != $NOME;

*/

// Não é case sensitive
echo "teste 1 <br>";
echo "teste 2 <br>";
echo "teste 3 <br>";

// é case sensitive
$nome = "taiane";

// O erro: Undefined variable $noMe
echo "Olá $noMe";
