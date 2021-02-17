<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniadir</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Añadir</h1>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarea1PHP";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $query = "insert into clientes(nombre,apellido,email) values ('nombre1','apellido1','email1')";
    $resultado = mysqli_query($conn, $query);

    if ($resultado === TRUE) {
        echo "<h3 class='result'>Nuevo registro creado.</h3>";
    } else {
        echo "<div class='result'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
    
    ?>
</body>

</html>