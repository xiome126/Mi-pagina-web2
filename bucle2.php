<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Con While</title>
    <link rel="stylesheet" href="bucle2.css">
</head>


<body>
    <h2>Ingreso De 4 Notas Con While</h2>

    <form method="post">
        <?php
        //Generamos 4 Inputs Con While
        $i = 1;
        while ($i<= 4) {
            echo "<label>Nota $i:</label><br>";
            echo "<input type='number' name='nota$i' min='0' max='20' required><br>";
            $i++;
        }
        ?>
        <input type="submit" value="Calcular Resultados">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $i = 1;
    $ACU = 0;
    $mayor = 0;
    $menor = 21;
    $cond = "";
    echo "<div class='resultados'>";
    echo "<h3>Resultados Del Estudiante</h3>";

    while ($i <= 4) {
        $nota = $_POST["nota$i"];
        echo "Nota $i: <b>$nota</b><br>";

        $ACU += $nota;
        
        if ($nota > $mayor) {
            $mayor = $nota;
        }
        if ($nota < $menor) {
            $menor = $nota;
        }

        $i++;
    }
    $promedio = $ACU / 4;
    $cond = ($promedio >= 13) ? "<span class='aprobado'>APROBADO</span>" : "<span class='reprobado'>REPROBADO</span";
    echo "<hr>";
    echo "Acumulado De Las Notas: <b>$ACU</b><br>";
    echo "Promedio Final: <b>$promedio</b><br>";
    echo "Mayor Nota: <b>$mayor</b><br>";
    echo "Menor Nota: <b>$menor</b><br>";
    echo "Condicion: $cond<br>";
    echo "</div>";
}
?>
</body>
</html>