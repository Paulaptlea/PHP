<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista11.php">
        Insira a sua altura:
        <input type="text" name="altura">
        <input type="submit" value="Enviar">

        <?php

            $altura = $_GET["altura"];

            $pesoIdeal = (72.7 * $altura) - 58;

            echo"<br>O seu peso ideal é : ".$pesoIdeal;
            
        ?>
        

    </form>
</body>
</html>