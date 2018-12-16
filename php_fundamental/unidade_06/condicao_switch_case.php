<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $dia = "quarta";
        switch($dia) {
            case "segunda":
                echo "Hoje ainda é segunda <br>";
                break;
            case "sexta":
                echo"Hoje é sexta feira <br>";
                break;
            default:
                echo "Ainda na metade da semana";
        }

    ?>
    </body>
</html>