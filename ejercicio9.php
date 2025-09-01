
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h2>Sueldo Del Trabajador:</h2>

        <form action="" method="get">

        <label for="nombre">Escribe Nombre: </label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="sueldo">Escribe Sueldo</label>
        <input type="number" id="sueldo" name="sueldo" required>

        <label for="categoria">Selecciona categoria</label>

        <select name="categoria" id="categoria">
         <option value="1">Categoria 1</option>
         <option value="2">Categoria 2</option>
         <option value="3">Categoria 3</option>
         <option value="4">Categoria 4</option>
</select>

<button type="submit" class="btn">calcular</button> 

</form>
</body>
</html>