<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="propuesto.css">
</head>
<body>
    <div class="card">
        <h2> Calculo De Pension</2>
        <form method="post" action="">
            <label for="nombre">Nombre Del Estudiante:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="pension">Pension (S/):</label>
            <input type="number" id="pension" name="pension" step="0.01" required>

            <label for="turno">Turno:</label>
            <select id="turno" name="turno" required>
                <option value="mañana">Mañana</option>
                <option value="tarde">Tarde</option>
                <option value="noche">Noche</option>
            </select>
                <button type="submit" class="btn">Calcular</button>
        
        </form
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $pension = $_POST['pension'];
        $turno = $_POST['turno'];

        //Calculo Del Descuento
        if($turno == "mañana") {
            $descuento = 0.30;
        } elseif ($turno == "tarde") {
            $descuento = 0.15;
        } else {
            $descuento = 0.10;
        }
        $monto_descuento = $pension * $descuento;
        $nueva_pension = $pension - $monto_descuento;

        echo "<div class='resultado'><br>";
        echo "<strong>resultado:</strong><br>";
        echo "estudiante: $nombre <br>";
        echo "turno: $turno <br>";
        echo "pension original: S/ " . number_format(num: $pension, decimals: 2) . "</br>";
        echo "descuento aplicado: " . ($descuento * 100) . "% <br>";
        echo "nueva pension a pagar: <b>S/ " . number_format(num: $nueva_pension, decimals: 2) . "</b>";
        echo "</div>";
    }
    ?>
    
    </div>
</body>
</html