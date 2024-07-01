<?php

/*
Palavras reservadas

● Algumas palavras são reservadas da linguagem e já tem suas
funcionalidades definidas, então não podemos utilizar em nossos programas;
● Pois caso fosse possível poderíamos substituir a sua função original;
● Alguns exemplos são: echo, insteadof, else, interface, namespace,pow,
__DIR__, __FILE__, endif, print, private, protected, and, require, public,
as, break, case, for, finally, switch, throw e etc;
*/

// Esse código dará erro pois não é possível ter funções com a palavra echo, while etc pois ela é reservada do PHP
// function echo() {
//     return true;
// }

function whileT() {
    return true;
}
