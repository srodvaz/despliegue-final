<?php

function conexion()
{
    // Poner la IP donde se encuentren la base de datos
    $servername = "localhost";
    // Usuario y contraseña para entrar en la BBDD
    $username = "sara";
    $password = "sara";
    /**
     * Nombre que le queramos asignar a la BBDD
     * Poner atención a que coincida con los datos del archivo sql
     */ 
    $dbname = "despliegue";

    return $conn = mysqli_connect($servername, $username, $password, $dbname);
}

?>
