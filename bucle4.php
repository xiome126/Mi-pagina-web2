<?php
$acu=0;//acumulado
$npares=0;//contador de numeros pares
$spares=0;//suma de pares
$nimpares=0;//contador de numeros impares
$simpares=0;//suma de impares
$i=1;//contador comienza en uno
while($i<=17){
    $acu+=$i;
if($i%2==0){
    $npares++;
    $spares+=$npares;
} 
else{
    $nimpares++;
    $simpares+=$nimpares;
}
echo"El Numero Es: $i <br>";
$i++;
}
echo "El Acumulado Es: $acu <br>";
echo "Cantidad De Numeros De Pares Son: $npares<br>";
echo "Suma De Pares Son: $spares<br>";
echo "Cantidad Numeros Impares Son: $nimpares<br>";
echo "Suma De Impares Son: $simpares<br>";
?>