<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista4.php">
    Digite a nota do primeiro bimestre:
    <input type="number" name="b1"> <br><br>
    Digite a nota do segundo bimestre:
    <input type="number" name="b2"> <br><br>
    Digite a nota do terceiro bimestre:
    <input type="number" name="b3"> <br><br>
    <input type="submit" value="Enviar">
    </form>

    <?php

        $b1 = $_GET["b1"];
        $b2 = $_GET["b2"];
        $b3 = $_GET["b3"];

        $media = $b1 + $b2 + $b3 / 3;

        echo"<br> A média entre os números é : ".$media;

    ?>

</body>
</html>