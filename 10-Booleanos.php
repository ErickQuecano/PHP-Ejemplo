<?php
//caso 1
$luzEncendida=true;
    if($luzEncendida)
    echo "La luz esta encendida";
    else
    echo "La luz esta apagada";
//caso 2

$sintomas_covid=[
        "tos"=>true,
        "fiebre"=>true,
        "dolor"=>false,
        "perdida_olfato"=>false];
    if($sintomas_covid["tos"] &&
    $sintomas_covid["fiebre"]){
        echo "\nEstas enfermo mano tienes covid. Ve a centro de salud.";
    }
    else{
    echo"\nAun no estas con covid.";
}
//caso 3
$saldo = 1000;
if(!($saldo > 0)){
    echo "\nTienes saldo insuficiente";
}
else{
    echo "\nTienes saldo pe";
}

?>