<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen1</title>
    <link rel="stylesheet" href="examen1.css">
</head>
<body>
   
<h2>Verificar la Mayoria de Edad</h2>
    <form method="post" action="">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label>Edad:</label>
        <input type="number" name="edad" required min="0"><br><br>

        <input type="submit" name="verificar" value="comprobar"><br>
    </form>

    <?php
    if (isset($_POST['verificar'])) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "<div clss='resultado'>$nombre $apellidos tiene $edad años: <b>Es mayor de edad </b></div>";
        } else {
            echo "<div class='resultado'>$nombre $apellidos tiene $edad años: <b>es menor de edad </b></div>";
        }
    }
    ?>
</body>
</html>