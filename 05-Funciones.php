<?php
function ObtenerSaludo($Parametro){
    return "Hola como estas ". $Parametro; 
}


function MostrarDatos($nombres, $apellidos, $curso, $semestre){
    $mensaje = $nombres." ".$apellidos." y estoy en el curso ".$curso." ".$semestre;
    return $mensaje;
}

echo ObtenerSaludo("Erick")."</n>";
echo MostrarDatos("Erick", "Quecaño", "Backend","III");
?>