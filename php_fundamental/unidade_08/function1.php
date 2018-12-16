<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retonarDiaria () {
                $salario = 5000;
                return number_format($salario/30, 2);
            }
            echo retonarDiaria();
        ?>
    </body>
</html>