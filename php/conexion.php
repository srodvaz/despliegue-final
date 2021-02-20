<?php

function conexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "despliegue";

    return $conn = mysqli_connect($servername, $username, $password, $dbname);
}

?>
