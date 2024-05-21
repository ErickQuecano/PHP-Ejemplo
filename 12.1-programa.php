<?php
include("12-clase.php");

echo "******** BIENVENIDO A MI CALCULADORA *********\n";
echo "******** MENU DE OPCIONES *********\n";
echo "******** SUMAR (OPCION 1) *********\n";
echo "******** RESTAR (OPCION 2) *********\n";
echo "******** MULTIPLICAR (OPCION 3) *********\n";
echo "******** DIVIDIR (OPCION 4) *********\n";
echo "******** POTENCIA (OPCION 5) *********\n";
echo "******** RAIZ (OPCION 6) *********\n";
echo "******** SALIR (OPCION 0) *********\n";
echo "INGRESE LA OPCION :";

$opcion = fgets(STDIN);
switch ($opcion) {
    case 1:
        echo "Escriba el primer Numero: ";
        $numero1 = fgets(STDIN);
        echo "Escriba el segundo Numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new Calculadora($numero1,$numero2);
        $resultado = $calculadora->sumar();
        echo "\nLa Suma es : ".$resultado;
        break;

    case 2:
        echo "Escriba el primer Numero: ";
        $numero1 = fgets(STDIN);
        echo "Escriba el segundo Numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new Calculadora($numero1,$numero2);
        $resultado = $calculadora->restar();
        echo "\nLa Resta es : ".$resultado;
        break;

    case 3:
        echo "Escriba el primer Numero: ";
        $numero1 = fgets(STDIN);
        echo "Escriba el segundo Numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new Calculadora($numero1,$numero2);
        $resultado = $calculadora->multiplicar();
        echo "\nLa Multiplicacion es : ".$resultado;
        break;
    case 4:
        echo "Escriba el primer Numero: ";
        $numero1 = fgets(STDIN);
        echo "Escriba el segundo Numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new Calculadora($numero1,$numero2);
        $resultado = $calculadora->dividir();
        echo "\nLa Division es : ".$resultado;
        break;
    case 5:
        echo "Escriba el primer Numero: ";
        $numero1 = fgets(STDIN);
        echo "Escriba el segundo Numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new Calculadora($numero1,$numero2);
        $resultado = $calculadora->potencia();
        echo "\nLa Potencia es : ".$resultado;
        break;
    case 6:
        echo "Escriba el primer Numero: ";
        $numero1 = fgets(STDIN);
        echo "Escriba el segundo Numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new Calculadora($numero1,$numero2);
        $resultado = $calculadora->raiz();
        echo "\nLa Raiz es : ".$resultado;
        break;
    case 0:
        echo "Muchas gracias por estar aqui";
        break;

    default:
        # code...
        break;
}
?>