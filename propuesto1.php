<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="propuesto.css">
</head>
<body>
    

<h2>Calcular Sueldo Neto Del Trabajador</h2>

    <form method="post">
        <label>Nombre Del Trabajador:</label>
        <input type="text" name="nombre" required>
        
        <label>Categoria:</label>
        <select name="categoria"required>
        <option value="1">Categoria 1 - Aumento 15%</option>
        <option value="2">Categoria 2 - Aumento 10%</option>
        <option value="3">Categoria 3 - Aumento 8%</option>
        <option value="4">Categoria 4 - Aumento 7%</option>
        </select>

        <label>Sueldo Base:</label>
        <input type="number" name="sueldo" required>

        <button type="submit" class="btn">Calcular</button>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $sueldo = $_POST["sueldo"];
    
    //calcular aumento segun la categoria
    switch ($categoria) {
        case 1: $aumento = $sueldo * 0.15; break;
        case 2: $aumento = $sueldo * 0.10; break;
        case 3: $aumento = $sueldo * 0.08; break;
        case 4: $aumento = $sueldo * 0.07; break;
        default: $aumento = 0; break;
    }
    $sueldoneto = $sueldo + $aumento;

    //mostrar resultados
    echo "div class='resultado'>";
    echo "<h3>resultado</h3>";
    echo "nombre: <b>$nombre</b><br>";
    echo "categoria: <b>$categoria</b><br>";
    echo "sueldo base: S/ " . number_format($sueldo, 2) . "</br>";
    echo "aumento: S/ " . number_format($aumento, 2) . "</br>";
    echo "sueldo neto: <b>S/ " . number_format($sueldoneto, 2) . "</b>";
    echo "</div>";
}
?>
</body>
</html>