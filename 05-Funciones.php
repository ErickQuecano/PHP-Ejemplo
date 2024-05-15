<?php
function ObtenerSaludo($Parametro){
    return "Hola como estas ". $Parametro; 
}


function MostrarDatos($nombres, $apellidos, $curso, $semestre){
    $mensaje = $nombres." ".$apellidos." y estoy en el curso ".$curso." ".$semestre;
    return $mensaje;
}

function calcular($operador, $numero1, $numero2){

    if($operador=="+")
    return $numero1+$numero2;
    if($operador=="-")
    return $numero1-$numero2;
    if($operador=="*")
    return $numero1*$numero2;
    if($operador=="/")
    return $numero1/$numero2;
}

echo ObtenerSaludo("Erick")."<br>";
echo MostrarDatos("Erick", "Quecaño", "Backend","III")."<br>";
echo "El total de la suma es : ".calcular("+",10,34)
?>