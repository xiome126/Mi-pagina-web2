<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bucle1.css">
</head>
<body>
    <h2>Bucle Repititivo While en PHP</h2>
    <form method="post">
        <label> Ingrese Un Numero Limite:</label><br><br>
        <input type="number" name="limite" min="1" required>
        <br><br>
        <input type="submit" value="General">
        <button type="button" onclick="location.href=location.href">Limpiar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["limite"])) {
        $limite = $_POST["limite"];
        $contador = 1;

        echo "</div class='resultado'>";
        echo "<h3>Resultados:</h3>";
        while ($contador <= $limite) {
            echo "Numero: " . $contador . "<br>";
            $contador++;
        }
        echo "</div>";
    }
    ?>
</body>
</html>