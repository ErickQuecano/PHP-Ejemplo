<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $talla_m = $_POST['talla'];
    $peso_kg = $_POST['peso'];
    $sintoma_tos = $_POST['sintoma_tos'];
    $sintoma_fiebre = $_POST['sintoma_fiebre'];
    $sintoma_disnea = $_POST['sintoma_disnea'];
    $id = $_POST['id'];

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;

    $nombre = $_POST["nombre"];
    $dsn="mysql:host=localhost;dbname=covid";//dsn: data source name , nombre origen de datos
    $user="root";//user : usuario
    $pass="";//pass : clave de usuario
    $db = new PDO($dsn, $user, $pass);

    $pacientes = $db->exec("UPDATE `covid`.`pacientes`
     SET `nombres`='$nombre', `edad`=$edad, `talla_m`=$talla_m, 
     `peso_kg`=$peso_kg, `sintoma_tos`='$sintoma_tos', `sintoma_fiebre`='$sintoma_fiebre', 
     `sintoma_disnea`='$sintoma_disnea' 
     WHERE  `id`=$id;"); //edad BETWEEN 18 AND 19

}
?>