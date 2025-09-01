<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen1</title>
    <link rel="stylesheet" href="examen2.css">
</head>
<body>
   <div class="contenedor">
<h2>Verificar numero</h2>
    <form method="post">
        <input type="number" name="numero" placeholder="ingrese un numero" required><br>
        <input type="submit" name="verificar" value="verificar">
    </form>

    <?php
    if (isset($_POST['verificar'])) {
        $numero = $_POST['nombre'];
        if ($numero > 0) {
            echo "<div class='resultado positivo'>$numero es un numero positivo </div>";
        } elseif ($numero < 0) {
            echo "<div class='resultado negativo'>$numero es un numero negativo </div>";
        } else {
            echo "<div class='resultado cero'>el numero ingresado es cero </div>";
        }
    }
    ?>
    </div>
</body>
</html>