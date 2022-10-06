<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista10.php">
        Digite um número inteiro:
        <input type="number" name="int1"><br><br>
        Digite outro número inteiro:
        <input type="number" name="int2"><br><br>
        Digite um número real:
        <input type="number" name="real"><br><br>
        <input type="submit" value="Enviar"><br>

        <?php

            $int1 = $_GET["int1"];
            $int2 = $_GET["int2"];
            $real = $_GET["real"];

            $calculo1 = $int1 *2 + $int2/2;
            $calculo2 = (3* $int1) + $real;
            $calculo3 = $real**3;

            echo"<br>O produto do dobro de " .$int1. " + a metade de " .$int2. " : " .$calculo1;
            echo"<br>A soma do triplo de " .$int1. " com " .$int2. " é igual a : " .$calculo2;
            echo"<br>" .$real. " ao cubo é : " .$calculo3;
            
        ?>
    </form>
</body>
</html>