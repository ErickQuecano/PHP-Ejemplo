<?php

include("15-polimorfismo.php");
include("12-clase.php");

echo "Areas de figuras\n";
echo "/////////////////////////////////////////////\n";

echo "Area de triangulo\n";
echo "Ingrese la base : ";
$b=fgets(STDIN);
echo "Ingrese la altura :";
$h=fgets(STDIN);
$triangulo = new Triangulo($b,$h);
$area=$triangulo->calcularArea();
echo "El area del triangulo es ".$area;

echo "\n/////////////////////////////////////////////";

echo "\nArea de Rectangulo\n";
echo "Ingrese la base : ";
$b=fgets(STDIN);
echo "Ingrese la altura :";
$h=fgets(STDIN);
$rectangulo = new Rectangulo($b,$h);
$area=$rectangulo->calcularArea();
echo "El area del rectangulo es ".$area;

echo "\n/////////////////////////////////////////////";

echo "\nArea de Cuadrado\n";
echo "Escriba el lado Numero: ";
$lado = fgets(STDIN);
$numpotencia = 2;
$calculadora = new Calculadora($lado,$numpotencia);
$resultado = $calculadora->potencia();
echo "El area del rectangulo es ".$resultado;

echo "\n/////////////////////////////////////////////";

echo "\nArea del Circulo\n";
echo "Escriba el radio: ";
$radio = fgets(STDIN);
$numpotencia = 2;
$calculadora = new Calculadora($radio,$numpotencia);
$radiopotenciado = $calculadora->potencia();
$resultado = $radiopotenciado*pi();
echo "El area del circulo es ".$resultado;

echo "\n/////////////////////////////////////////////";
?>