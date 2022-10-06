<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista6.php">
        Digite a largura do quadrado:
        <input type="number" name="larg">´<br><br>
        Digite o comprimento do quadrado:
        <input type="number" name="comp"><br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php

        $larg = $_GET["larg"];
        $comp = $_GET["comp"];

        $area = $larg * $comp;
        $areadobro = ($larg * $comp) * ($larg * $comp);

        echo"O dobro da area desse quadrado é : ".$areadobro;

    ?>
</body>
</html>