<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calificaion</title>
    <link rel="stylesheet" href="evaluacion5.css">
</head>
<body>
    <div class="container">
        <h2>Calificación Del Estudiante</h2>
        <form action="evaluacion5.php" method="post">

        <label for="txtnombre">Escribe Nombre:</label>
        <input type="text" name="txtnombre" placehoder="Escribe Nombre" required>

        <label for="txtapellidos">Escribe Apellidos:</label>
        <input type="text" name="txtapellidos" placehoder="Escribe Apellidos" required>

        <label for="txtcalificacion">Escribe Calificacion:</label>
        <input type="text" name="txtcalificación" placehoder="Escribe Calificación" required>

        <input type="submit" name="btncalcular" value="Calcular">

        </form>
        <?php
        if(isset($_POST['btncalcular'])){
            $nom=$_POST['txtnombre'];
            $ape=$_POST['txtapellidos'];
            $nota=$_POST['txtcalificación'];
            $mensaje="";

            if($nota >= 18){
                $mensaje="excelente";
            }
            elseif($nota >= 14){
                $mensaje="bueno";
             }
            elseif($nota >= 14){
             $mensaje="bueno";
             }
            elseif($nota >= 11){
                $mensaje="regular";
            }
            elseif($nota < 11){
                $mensaje="deficiente";
            }

            echo "<div class= 'resultado'>";
            echo "<div class= 'Nombre'><b>nombre:</b> $nom</div>";
            echo "<div class= 'Apellidos'><b>apellidos:</b> $ape</div>";
            echo "<div class= 'Calificación'><b>calificación:</b> $nota</div>";
            echo "<div class= 'Mensaje'><b>mensaje:</b> $mensaje</div>";

            echo "</div>";
        }
        ?>

    </div>

</body>
</html>