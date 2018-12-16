<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retonarDiaria ($salario, $dia) {
                return number_format($salario/$dia, 2);
            }
            $diaria = retonarDiaria(10000, 30);
            echo $diaria;
        ?>
    </body>
</html>