<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retonarDiaria ($salario) {
                return number_format($salario/30, 2);
            }
            $diaria = retonarDiaria(8000);
            echo $diaria;
        ?>
    </body>
</html>