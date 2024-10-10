<?php


    session_start();
    echo "Hola ".$_SESSION['nombre']."<br>";
    echo "Tienes la edad de ".$_SESSION['edad']."<br>";
    echo "Con el email " .$_SESSION['email']."<br>";
    echo "Su pais es: ".$_SESSION['pais'];

?>