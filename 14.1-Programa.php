<?php
include ("14-herencia.php");

echo "Ejmplo de Herencia con Animales\n";

$perro= new Perro("Cueva","Verde",false,"perro-ladra.mp3");
echo $perro->obtenerInformacion()."\n";
echo $perro->hacerSonido("Guauu");

$gato= new Gato("Cueva","Amarillo",false,"gallina-ki..mp3");
echo $gato->obtenerInformacion()."\n";
echo $gato->hacerSonido("Kiki riki");

$gallina= new Gallina("Cueva","Rojo",false,"gato-miau.mp3");
echo $gallina->obtenerInformacion()."\n";
echo $gallina->hacerSonido("Miauu");
?>