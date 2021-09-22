<?php

require_once "Carro.php";
require_once "Fabricante.php";

 $c1 = new Carro ("Civic", "sedan");
 $f1 = new Fabricante ("Honda", 12345678000144);
 $c1->setFabricante( $f1 );

 echo "<br>\n";
 echo "=======Novo Modelo=======". "<br>\n";
 echo "O nome do carro é: ". $c1->getNome(). "<br>\n";
 echo "O fabricante é: ". $c1->getFabricante() -> getNome()."<br>\n";
 echo "Quantidade de modelos criada é: ". Carro::$contador . "<br>\n";

 $c2 = new Carro ("Accord", "sedan");
 $c2->setFabricante( $f1 );

 echo "<br>\n";
 echo "=======Novo Modelo=======". "<br>\n";
 echo "O nome do carro é: ". $c2->getNome(). "<br>\n";
 echo "O fabricante é: ". $c2->getFabricante() -> getNome()."<br>\n";
 echo "Quantidade de modelos criada é: ". Carro::$contador. "<br>\n";

 $c2 = new Carro ("CRV", "SUV");
 $c2->setFabricante( $f1 );

 echo "<br>\n";
 echo "=======Novo Modelo=======". "<br>\n";
 echo "O nome do carro é: ". $c2->getNome(). "<br>\n";
 echo "O fabricante é: ". $c2->getFabricante() -> getNome()."<br>\n";
 echo "Quantidade de modelos criada é: ". Carro::$contador. "<br>\n";

 $c3 = new Carro ("Jetta", "sedan");
 $f2 = new Fabricante ("Volkswagem", 12345678000177);
 $c3->setFabricante( $f2 );

 echo "<br>\n";
 echo "=======Novo Modelo=======". "<br>\n";
 echo "O nome do carro é: ". $c3->getNome(). "<br>\n";
 echo "O fabricante é: ". $c3->getFabricante() -> getNome()."<br>\n";
 echo "Quantidade de modelos criada é: ". Carro::$contador. "<br>\n";

 $c4 = new Carro ("Vectra", "sedan");
 $f3 = new Fabricante ("Chevrolett", 12345678000199);
 $c4->setFabricante( $f3 );

 echo "<br>\n";
 echo "=======Novo Modelo=======". "<br>\n";
 echo "O nome do carro é: ". $c4->getNome(). "<br>\n";
 echo "O fabricante é: ". $c4->getFabricante() -> getNome()."<br>\n";
 echo "Quantidade de modelos criada é: ". Carro::$contador. "<br>\n";




?>