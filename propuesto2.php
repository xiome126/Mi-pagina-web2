<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="propuesto2.css">
</head>
<body>
    
<h2>Eleccion de Candidatos</h2>

<form method="post">
        <label>Ingrese los votos separador por espacio (finalice con 0):</label><br><br>
        <textarea name="votos" placeholder="Ejemplo: 1 3 1 4 2 3 0"></textarea><br>
        <input type="submit" name="calcular" value="Calcular Resultados">
    </form>
<?php
if(isset($_POST['calcular'])) {
    $entrada = trim($_POST["votos"]);
    $votos = explode(" ", $entrada);

    //inicializar contador de votos
    $candidatos = [1 => 0, 2 => 0, 3 => 0, 4 => 0];
    $total = 0;

    //procesar los votos con un bucle
    foreach ($votos as $voto) {
        $voto = intval($voto);
        if ($voto == 0) {
            break; //fin de datos
        }
        if (isset($candidatos[$voto])) {
            $candidatos[$voto]++;
            $total++;
        }
    }
    
    if ($total > 0) {
        echo "<table>";
        echo "<tr><th>candidato</th><th>votos</th><th>porcentaje</th></tr>";
        $ganador = 0;
        $maxVotos = 0;

        foreach ($candidatos es $num => $cantidad) {
            $porcentaje = ($cantidad / $total) * 100;
            echo "<tr><td>candidato $num</td><td>$cantidad</td><td>".number_format($porcentaje,2)."%</td></tr>";

            if ($cantidad > $maxVotos) {
                $maxVotos = $cantidad;
                $ganador = $num;
            }
        }
        echo "</table>";
        echo "<h3 style='text-align:center; dolor:green; '>el ganador es el candidato $ganador con $maxVotos votos. </h3>";
    } else {
        echo "<p style='text-align:center; color:red; 'no se ingresaron votos validos. </p>";
    }
}
?>

</body>
</html>