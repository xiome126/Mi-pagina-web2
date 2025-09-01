<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container"></div>
    <h2>Dias De La Semana:</h2>
    <form action="evaluacion9.php">

        <select name="cdosemana" required>
            <option value="1"></option>
            <option value="2"></option>
            <option value="3"></option>
            <option value="4"></option>
            <option value="5"></option>
            <option value="6"></option>
            <option value="7"></option>
        </select>
    <input type="submit" name="btncalcular" value="calcular">
    </form>
    <?php
    if(isset($_POST['btncalcular'])){
        $num=$_POST['cbosemana'];
        $dia="";

        if($num=='1'){
            $dia="lunes";
        }
        elseif($num=='2'){
            $dia="martes";
        }
        elseif($num=='3'){
            $dia="miercoles";
        }
        elseif($num=='4'){
            $dia="jueves";
        }
        elseif($num=='5'){
            $dia="viernes";
        }
        elseif($num=='6'){
            $dia="sabado";
        }
        elseif($num=='7'){
            $dia="domingo";
        }

        echo "<div class 'Resultado'>";
    echo "<div class 'numero'>nombre es:$num </div>";
    echo "<div class 'dia'>precio es:$dia </div>";

    echo "</div>";
    }
    ?>
</body>
</html>