<?php
//realizar un programa que me permita imprimir
//los tres colores del semoforo para el auto
//siendo el siguiente enunciado
//Si el semaforo esta en rojo debe decir ¡pare!
//Si el semaforo esta en amarillo debe decir ¡espera!
//Si el semaforo esta en verde debe decir ¡Avanza!
//para ello el programa debe pedir al usuario que ingrese
//un numero o una letra para luego evaluar que color
//esta eligiendo
echo "SEMAFORO DE CARTON"."\n";
echo "(1) Rojo"."\n"."(2) Amarillo"."\n"."(3) Verde";
echo "\nEliga el color del semaforo : ";

$eleccion=fgets(STDIN);

$rojo = 1;
$amarillo = 2;
$verde = 3;

if($eleccion == 1){
echo "\nEl semaforo esta en rojo, ¡Pare!";}
else
if($eleccion == 2){
echo "\nEl semaforo esta en amarillo, ¡Espera!";}
else
if($eleccion == 3){
echo "\nEl semaforo esta en verde, ¡Avance!";}

else{
echo "Ponga una opcion asignada";}

?>