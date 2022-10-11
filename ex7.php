<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7.php</title>
</head>

<body>
    <form action="ex7.php" method="get">

        Em que turno você estuda?
        <select name="periodo">

            <option value="S">Selecione</option>
            <option value="M">Matutino</option>
            <option value="V">Vespertino</option>
            <option value="N">Noturno</option>

        </select> <br> <br>

        <input type="submit" value="Cadastrar"> <br><br>

        <?php

        $periodo = $_GET["periodo"];

        if ($periodo == "M") {
            echo "Bom dia!";
        } else if ($periodo == "V") {
            echo "Boa Tarde!";
        } else {
            echo "Boa Noite!";
        }

        ?>

    </form>
</body>

</html>