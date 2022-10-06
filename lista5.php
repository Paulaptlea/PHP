<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista5.php">
        Escreva a medida em metros:
        <input type="number" name="metros">
        <input type="submit" value="Enviar">
    </form>

    <?php
    
        $metros = $_GET["metros"];
        $cm = $metros * 100;

        echo"<br> $metros metros convertido em centímetros é : ".$cm;

    ?>

</body>
</html>