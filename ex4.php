<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    Numero 1:
    <input type="text" name="numero1">
    <br> <br>
    Numero 2:
    <input type="text" name="numero2">
    <br> <br>
    <input type="submit" value="Calcular">
    
</form>
<br>
    <?php
    
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];

        $soma = $n1 + $n2;
        echo"A soma é:   ".$soma; 

    ?>
</body>
</html>