<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Añadir</h1>";

    // Llamamos a la clase conexion con los datos de la BBDD
    require_once('conexion.php');

    // Creamos la conexión a las BBDD
    $conn = conexion();

    // Comprobamos la conexion
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    // Form para que se elija el registro que se quiere eliminar
    echo "<form class='result' name='input' method='get' action=''>
    <label>Inserta qué registro quieres eliminar</label>
    <input type='number' name='numero' placeholder='ID a eliminar'>
    <input type='submit' value='OK'>
    </form>";
    $numero = $_GET['numero'];

    // Realizamos el detele en la BBDD
    if (isset($numero)) {
        $query = "DELETE FROM clientes WHERE id=$numero";
        $resultado = mysqli_query($conn, $query);

        // Mostramos el resultado de la consulta
        if ($resultado === TRUE) {
            echo "<h3 class='result'>Registro eliminado correctamente.</h3>";
        } else {
            echo "<div class='result'>Error: " . $conn->error . "</div>";
        }
        $conn->close();
    }

    //Enlace de vuelta al index
    echo "<a class='volver' href='../index.html'>Volver atrás</a>"
    ?>
</body>

</html>