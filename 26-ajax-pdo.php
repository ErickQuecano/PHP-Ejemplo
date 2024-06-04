<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
try {
    $nombre = $_POST["nombre"];
    $dsn="mysql:host=localhost;dbname=covid";//dsn: data source name , nombre origen de datos
    $user="root";//user : usuario
    $pass="";//pass : clave de usuario
    $db = new PDO($dsn, $user, $pass);
    $pacientes = $db->query("SELECT * FROM pacientes where nombres like '%$nombre%'");//edad BETWEEN 18 AND 19
    
    $resultado=[];
    foreach ($pacientes as $row) {
        array_push($resultado,$row);
    }
    echo json_encode($resultado);    
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    echo "Error : ".$e->getMessage();
}
}
?>