<?php

// Criação da classe
class Pessoa
{
    // Criação dos atributos
    public $nome;
    public $idade;

    // Criação do método
    public function Falar()
    {
        echo $this->nome . " de " . $this->idade . " acabou de falar";
    }
}

// Criação do objeto
$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 25;
// Chama o método
$rodrigo->Falar();

// var_dump($rodrigo);