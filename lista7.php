<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista7.php">
        Quanto reais você ganha por hora:
        <input type="number" name="valorhora"><br><br>
        Quantas horas você trabalha por mês:
        <input type="number" name="meshora"><br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php

        $valorhora = $_GET["valorhora"];
        $meshora = $_GET["meshora"];

        $salario = $meshora * $valorhora;

        echo"<br>Seu salário é : ".$salario;
    ?>
</body>
</html>