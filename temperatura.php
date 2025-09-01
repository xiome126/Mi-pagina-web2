<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calificación de temperatura</title>
    <link rel="stylesheet" href="temperatura.css">

</head>
<body>
    <div class="container">
        <h2>Calificación De temperatura</h2>
        <form action="temperatura.php" method="post">

        <label for="txttemperatura">Escribe los grados:</label>
        <input type="number" name="txttemperatura" placehoder="Escribe los grados" required>

        <input type="submit" name="btncalcular" value="Calcular">

        </form>
        <?php
        if(isset($_POST['btncalcular'])){
            $tem=$_POST['txttemperatura'];
            $mensaje="";

            if($tem < 10){
                $mensaje="Frio";
            }
            elseif($tem > 25){
                $mensaje="agradable";

            }
            else {
                $mensaje="caluroso";
            }

            echo "<div class= 'resultado'>";
            echo "<div class= 'temperatura'><b>temperatura:</b> $tem</div>";
            echo "<div class= 'Mensaje'><b>mensaje:</b> $mensaje</div>";

            echo "</div>";
        }
        ?>

    </div>

</body>
</html>