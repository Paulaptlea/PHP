<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista15.php">
        Quanto você ganha por hora:
        <input type="text" name="hora"> <br><br>
        Horas trabalhadas no mês:
        <input type="text" name="htrab"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        
        $hora = $_GET["hora"];
        $htrab = $_GET["htrab"];

        $salario = $hora * $htrab;
        $ip = ($salario * 0.11);
        $inss = ($salario * 0.8);
        $sind = ($salario * 0.5);
        $sliq = $salario - ($ip + $inss + $sliq);

        echo"<br>Seu salário bruto é : ".$salario;
        echo"<br>Você pagou ao emposto de renda : ".$ip;
        echo"<br>Você pagou ao INSS : ".$inss;
        echo"<br>Você pagou ao Sindicato : ".$sind;
        echo"<br>Seu salário líquido é : ".$sliq;

    ?>
</body>
</html>