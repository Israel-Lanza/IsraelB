<?php   
    session_start();
    //Comprobamos que el formulario se ha enviado
    if(!empty($_POST['paso'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $pais = $_POST['pais'];
        $contador_errores = 0;
        $patron_nombre = "/^[A-Z]{1}+[a-z]{5,15}$/";
        $patron_email = "/^[a-z[A-Z0-9]+[-._]{0,1}[a-zA-Z0-9]+@[a-zA-Z0-9]+[-_]{0,1}[a-zA-Z0-9]+\.{1}[a-zA-Z]{2,}$/";

        //COmprobaciones por si alguno de los campos está vacio
        if(empty($nombre)){
            echo "!ERROR!, campo Nombre vacio";
            $contador_errores++;
        };

        if(empty($email)){
            echo "!ERROR!, campo Email vacio<br>";
            $contador_errores++;
        };

        if(empty($edad)){
            echo "!ERROR!, campo Edad vacio<br>";
            $contador_errores++;
        };

        if(empty($pais)){
            echo "!ERROR!, campo Pais vacio<br>";
            $contador_errores++;
        };

        //Validaciones por expresiones regulares
        if($contador_errores == 0){
            $contador_errores=0;
            if(preg_match($patron_nombre,$nombre)==0){
                echo "Error, nombre no válido<br>";
                $contador_errores++;
            };

            if(preg_match($patron_email,$email)==0){
                echo "Error, email no válido<br>";
                $contador_errores++;
            };

            if($edad<=17 || $edad >= 105){
                echo "!Error!, edad no correcta";
                $contador_errores++;
            };

            switch($pais){
                case "España":
                    break;
                case "Japón":
                    break;
                case "Inglaterra":
                    break;
                default:
                    echo "Error, país inválido, tiene las opciones puestas";
            }

            if($contador_errores==0){
                $_SESSION['nombre'] = $nombre;
                $_SESSION['email'] = $email;
                $_SESSION['edad'] = $edad;
                $_SESSION['pais'] = $pais;

                header("location: ./informacion.php");
                exit();

            };


        };



    };

?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>


    <form action="formulario.php" method="post">
        <input type="hidden" name="paso" value="1">
        <label for="usuario">Nombre: </label>
        <input type="text" name="nombre"><br>

        <label for="email">Email: </label>
        <input type="email" name="email"><br>

        <label for="edad">Edad: </label>
        <input type="text" name="edad"><br>

        <label for="pais">Seleccione un pais: </label><br>
        <label for="España">España</label><br>
        <label for="Japón">Japón</label><br>
        <label for="Inglaterra">Inglaterra</label><br>
        <input type="text" name="pais"><br>

        <input type="submit" value="Enviar">
       
    </form>
    
</body>
</html>