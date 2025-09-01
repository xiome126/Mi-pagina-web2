<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>resultados de notas</title>
    <link rel="stylesheet" href="nota11.css">
</head>
<body>
    <div class="card">
        <h2>Resultados del Estudiante</h2>
        <?php
        //DECLARAR LAS VARIABLES
        $nota1 = 10;
        $nota2 = 17;
        $nota3 = 12;
        $nota4 = 19;

        $cond="";
        $mayor=0;
        $menor=21;
        $ACU=0;

        // calcular acumulado (suma de las notas)
        $ACU = $nota1 + $nota2 + $nota3 + $nota4;

        // calcular el promedio final
        $promedio = $ACU / 4;
     //verificar si aprueba o reprueba
    if($promedio >= 13){
         $cond = "APROBADO";
         $clase = "aprobado";
    } else {
        $cond = "REPROBADO";
        $clase = "reprobado";
    }

     //hallar mayor nota
    if($nota1 > $nota2 && $nota1 > $nota3 && $nota1 > $nota4){
         $mayor = $nota1;
    } elseif($nota2 > $nota1 && $nota2 > $nota3 && $nota2 > $nota4){
        $mayor = $nota3;        
    } elseif($nota3 > $nota1 && $nota3 > $nota2 && $nota3 > $nota4){
        $mayor = $nota3;
    } else {
        $mayor = $nota4;
    }
//hallar mayor nota
if($nota1 > $nota2 && $nota1 > $nota3 && $nota1 > $nota4){
    $mayor = $nota1;
} elseif($nota2 > $nota1 && $nota2 > $nota3 && $nota2 > $nota4){
    $mayor = $nota2;
} elseif ($nota3 > $nota1 && $nota3 > $nota2 && $nota3 > $nota4){
    $mayor = $nota3;
} else {
    $mayor = $nota4;
}
//hallar menor nota
if($nota1<$nota2 && $nota1<$nota3 && $nota1<$nota4){
    $menor=$nota1;
}
elseif($nota2<$nota1 && $nota2<$nota3 && $nota2<$nota4){
    $menor=$nota2;
}
elseif($nota3<$nota1 && $nota3<$nota2 && $nota3<$nota4){
    $menor=$nota3;
}
else{
    $menor=$nota4;
}
    //mostrar resultados
    
    echo "<div class='nota'>Nota 1: $nota1</div>";
    echo "<div class='nota'>Nota 2: $nota2</div>";
    echo "<div class='nota'>Nota 3: $nota3</div>";
    echo "<div class='nota'>Nota 4: $nota4</div>";
    echo "<hr>";
    echo "<div class= 'resultado'><strong>acumulado:</strong> $ACU </div>";
    echo "<div class= 'resultado'><strong>promedio final:</strong> $promedio</div>";
    echo "<div class= 'resultado'><strong>mayor nota:</strong> $mayor </div>";
    echo "<div class= 'resultado'><strong>menor nota:</strong> $menor </div>";
    echo "<div class= 'estado $clase'>condicion: $cond</div";
    ?>
</body>
</html>