<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista8.php">
        Digite a temperatura em graus Farenheit:
        <input type="number" name="faren"> <br><br>
        <input type="submit" value="Enviar"> <br><br>

        <?php

            $faren = $_GET["faren"];
            $celcius = (5*($faren - 32)/9);

            echo" $faren em celcius é : ".$celcius;
            
        ?>
    </form>
</body>
</html>