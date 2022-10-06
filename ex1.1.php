<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ex1.1.php">
        Digite o raio do círculo:
        <input type="number" name="raio"> <br> <br>
        <input type="submit" value="Enviar"> <br>

        <?php

            $raio = $_GET["raio"];

            $perimetro = 2 * M_PI * $raio;
            $area = M_PI * $raio * $raio; // ou raio**2 = raio ao quadrado

            echo"<br>O perimetro do círculo é: : ".$perimetro;
            echo"<br>A área do círculo é: : ".$area;

        ?>

    </form>
</body>
</html>