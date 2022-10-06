<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista12.php">
        Digite sua altura:
        <input type="text" name="altura">
        <input type="submit" value="Enviar">
    </form>

    <?php

        $altura = $_GET["altura"];

        $alturaIdealM = (62.1 *$altura) - 44.7;

        $alturaIdealH = (72.7 * $altura) - 58;

        echo"<br>Altura ideal (Mulher) : ".$alturaIdealM;
        echo"<br>Altura ideal (Homem) : ".$alturaIdealH;
        
    ?>
</body>
</html>