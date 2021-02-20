<?php

function conexion()
{
    $servername = "localhost";
    $username = "sara";
    $password = "sara";
    $dbname = "despliegue";

    return $conn = mysqli_connect($servername, $username, $password, $dbname);
}

?>
