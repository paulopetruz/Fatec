<?php

class Fabricante
{
    public $nome;
    public $cnpj;

    public function __construct (string $nome, int $cnpj)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function getNome()
    {
        return $this->nome;
    }    




}


?>