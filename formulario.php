<?php

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>


    <form action="formulario.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario"><br>

        <label for="email">Email: </label>
        <input type="email" name="email"><br>

        <label for="edad">Edad: </label>
        <input type="text" name="edad"><br>

        <label for="pais">Pais: </label>
        <input type="text" name="pais"><br>
        
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>