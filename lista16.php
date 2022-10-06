<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista16.php">
        Tamanho (em metros quadrados) da área a ser pintada:
        <input type="text" name="areaPintada">
        <input type="submit" value="Enviar">
    </form>
    <?php
        $areaPintada = $_GET["areaPintada"];
        $resultado = ($areaPintada * 18) / 54;
        

        echo" Você precisa de : ".$resultado. "latas";

    ?>
</body>
</html>