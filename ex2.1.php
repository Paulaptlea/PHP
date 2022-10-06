<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.1.php" method="get">
    Digite um número:
    <input type="text" name="numero">
    <input type="submit" value="Enviar">
    </form>

    <?php

       $numero = $_GET["numero"];

        echo"O número informado foi : ".$numero;
    
    ?>
    
</body>
</html>