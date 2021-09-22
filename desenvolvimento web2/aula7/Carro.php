<?php

class Carro
{
    private $id;
    private $nome;
    private $modelo; //SUV, Pickap, Sedan ou hatch
    private $fabricante;
    public static $contador;

    public function __construct (string $nome, string $modelo)
    {
        self::$contador ++;

        $this->id = self::$contador;
        $this->nome = $nome;
        $this->modelo = $modelo;
    }

    //get
	public function getNome()
	{
		return $this->nome;
	}

    public function getFabricante() 
	{ 
	    return $this->fabricante; 
	}

    public function setFabricante( Fabricante $f)
    {
        $this->fabricante = $f;
    }

}




?>