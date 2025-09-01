<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nivel</title>
    <link rel="stylesheet" href="evaluacion7.css">
</head>
<body>
    
<div class="container">
    <h2>Realizar Pago Segun El Nivel De Estudio:</h2>
    <form action="evaluacion7.php" method="post">

    <label for="txtnom">Nombre</label>
    <input type="text" name="txtnom" placehoder="Escribe Nombre" required>

    <select name="cbonivel" required>

    <option value="primaria">primaria</option>
    <option value="secundaria">secundaria</option>
    <option value="tecnico">tecnico superior</option>
    <option value="superior">superior</option>
    </select>
    <input type="submit" name="btncalcular" value="calcular">
</form>
<?php

if(isset($_POST['btncalcular'])){
    $nom=$_POST["txtnom"];
    $nivel=$_POST['cbonivel'];
    $costo=0;

    if($nivel=='primaria'){
        $costo=80;
    }
    elseif($nivel=='secundaria'){
        $costo=100;
    }
    elseif($nivel=='tecnico'){
        $costo=120;
    }
    elseif($nivel=='superior'){
        $costo=150;
    }
    echo "<div class 'Resultado'>";
    echo "<div class 'Nombre'>nombre es:$nom </div>";
    echo "<div class 'costo'>precio es:$costo </div>";

    echo "</div>";

}
?>
</div>
</body>
</html>