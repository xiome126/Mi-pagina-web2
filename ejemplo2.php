<?php
//Datos del trapecio
$base_mayor = 12;  // en cm
$base_menor = 8;   // en cm
$altura = 5;       // en cm
$lado1 = 6;        // en cm
$lado2 = 6;        // en cm

// calculo del area (formula : ((base mayor + base menor) * altura) /2)
$area = (($base_mayor + $base_menor) *$altura) / 2;

//calculo del perimetro (suma de los cuatros lados)
$perimetro = $base_mayor + $base_menor +$lado1 +$lado2;

//mostrar los valores del trapecio
echo "base mayor es $base_mayor.<br>";
echo "base menor es $base_menor.<br>";
echo "altura es $altura.<br>";
echo "lado 1 es $lado1.<br>";
echo "lado 2 es $lado2.<br>";

//mostrar resultados
echo "area del trapecio: " . $area . " cm<br>";
echo "perimetro del trapecio: $perimetro<br>";
?>