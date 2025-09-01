<?php
//Datos del triangulo
$base = 10;      // en cm
$altura = 6;     // en cm
$lado1 = 10;     // en cm
$lado2 = 8;      // en cm
$lado3 = 6;      // en cm

// calculo del area (formula: (base * altura) / 2)
$area = ($base * $altura) / 2;
// calculo del perimetro (suma de los tres lados)
$perimetro = $lado1 + $lado2 + $lado3;
// imprimir datos de triangulo
echo "Base del triangulo es $base.<br>";
echo "Altura del triangulo es $altura.<br>";
echo "Lado 1 del triangulo es: $lado1.<br>";
echo "Lado 2 del triangulo es: $lado2.<br>";
echo "Lado 3 del triangulo es: $lado3.<br>";
echo "..................................<br>";
//Mostrar resultados
echo "Area del triangulo: " . $area . " cm<br>";
echo "Perimetro del triangulo: " . $perimetro . "cm ";
?>