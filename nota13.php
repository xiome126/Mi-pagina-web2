<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link rel="stylesheet" href="nota13.css">

</head>
<body>

<?php
    if ($_SERVER("request_method") == "post") {
        //capturar las notas del formulario
        $nota1 = $_POST('bota1');
        $nota2 = $_POST('bota1');
        $nota3 = $_POST('bota1');
        $nota4 = $_POST('bota1');

        //calcular acumulado y promedio
        $ACU = $nota1 + $nota2 + $nota3 + $nota4;
        $promedio = $ACU / 4;

        //verificar condicion
        if ($promedio >=13) {
            $cond = "APROBADO";
            $clase = "aprobado";
        } else {
            $cond = "REPROBADO";
            $clase = "reprobado";
        }
        //mayor y menor
        $mayor = max(value_array: $nota1, $nota2, $nota3, $nota4);
        $menor = min(value: $nota1, values: $nota2, $nota3, $nota4);

        //mostrar resultados
        echo "<div class='resultado $clase'>";
        echo "nota 1: $nota1 <br>";
        echo "nota 2: $nota2 <br>";
        echo "nota 3: $nota3 <br>";
        echo "nota 4: $nota4 <br>";
        echo "<hr>";
        echo "acumulado: $ACU <br>";
        echo "promedio: $promedio <br>";
        echo "mayor nota: $mayor <br>";
        echo "menor nota: $menor <br>";
        echo "<strong> condicion: $cond</strong>";
        echo "<p><b></b><a href='nota13.html'> ver pagina:</a></p>";
        echo "</div>";
    }
?>
    
</body>
</html>