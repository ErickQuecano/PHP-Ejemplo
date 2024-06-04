<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Paciente</title>
</head>
<body>
    <h1>Registro de Paciente</h1>
    <form id="formulario" action="21-pdo-post.php" method="post">    
        <label for ="nombre">Nombres:</label> 
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="edad">Edad :</label>
        <input type="text" id="edad" name="edad" required /><br>
        <label for="talla">Talla(cm):</label>
        <input type="text" id="talla" name="talla" required /><br>
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso"><br>
        <h2><u>Sintomas</u></h2>
        <input type="checkbox" name="tos" id="tos" value="1">
        <label for="tos">Tos</label><br>
        <input type="checkbox" name="fiebre" id="fiebre" value="1">
        <label for="fiebre">Fiebre</label><br>
        <input type="checkbox" name="disnea" id="disnea" value="1">
        <label for="disnea">Disnea</label><br>
        <input type="checkbox" id = dolor_muscular name ="dolor_muscular" value="1">
        <label for="dolor_muscular">Dolor muscular</label><br>
        <div class="Botones">
            <br>
            <button type="submit">Guardar</button>
            <button>Cancelar</button>
        </div>
    </form>    
</body>
</html>